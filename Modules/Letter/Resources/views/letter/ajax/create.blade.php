<style>
    #description .ql-editor {
        min-height: 350px;
    }
</style>
<div class="row">
    <div class="col-sm-6">
        <x-form id="letterForm">
            <div class="card bg-white rounded">
                <h4 class="mb-0 p-20 f-21 font-weight-normal border-bottom">
                    @lang('letter::app.letterDetails')</h4>
                <div class="row p-20">
                    <div class="col-md-12">
                        <x-forms.select fieldId="template_id" :fieldLabel="__('letter::app.fields.letterType')" fieldName="template_id" search="true">
                            <option value="">--</option>
                            @foreach ($templates as $template)
                                <option @selected($template->id == $letter?->template_id) value="{{ $template->id }}">{{ $template->title }}
                                </option>
                            @endforeach
                        </x-forms.select>
                    </div>

                    <div class="col-md-12">
                        <x-forms.select fieldId="employees" :fieldLabel="__('app.menu.employees')" :popover="__('letter::app.employeeInfo')" fieldName="user_id"
                            search="true">
                            <option value="">--</option>
                            @foreach ($employees as $employee)
                                <option @selected($employee->id == $letter?->user_id) value="{{ $employee->id }}">{{ $employee->name }}
                                </option>
                            @endforeach
                        </x-forms.select>
                    </div>
                    <div @class([
                        'col-md-12',
                        'd-none' => request()->letterId && !$letter?->name,
                    ]) id="employeeNameField">
                        <x-forms.text :fieldLabel="__('letter::app.fields.employeeName')" fieldName="employeeName" fieldId="employeeName"
                            :fieldValue="$letter?->name" />
                    </div>
                </div>
                <h4 class="m-b-20 ml-3 mt-3 f-18 text-success">{{ __('letter::app.adjustSpaceSetting') }}</h4>
                <div class="row px-3">
                    <div class="col-md-3">
                        <x-forms.number fieldId="left" :fieldLabel="__('letter::app.fields.left')" fieldName="left" :fieldValue="$letter?->left ?: 20" />
                    </div>
                    <div class="col-md-3">
                        <x-forms.number fieldId="right" :fieldLabel="__('letter::app.fields.right')" fieldName="right" :fieldValue="$letter?->right ?: 20" />
                    </div>
                    <div class="col-md-3">
                        <x-forms.number fieldId="top" :fieldLabel="__('letter::app.fields.top')" fieldName="top" :fieldValue="$letter?->top ?: 20" />
                    </div>
                    <div class="col-md-3">
                        <x-forms.number fieldId="bottom" :fieldLabel="__('letter::app.fields.bottom')" fieldName="bottom" :fieldValue="$letter?->bottom ?: 20" />
                    </div>
                </div>


                <div class="col-md-12 pb-2">
                    <x-forms.label class="my-3" fieldId="description-text" :fieldLabel="__('app.description')">
                    </x-forms.label>
                    <div id="description">{!! $letter?->description !!}</div>
                    <textarea name="description" id="description-text" class="d-none">{!! $letter?->description !!}</textarea>
                </div>

                <div class="row p-20">
                    <div class="col-12">
                        <h4 class="pl-2 mb-2 f-18 font-weight-normal text-capitalize">
                            @lang('letter::app.availableVariables')
                        </h4>
                    </div>
                    @foreach (\Modules\Letter\Enums\LetterVariable::cases() as $variable)
                        <div class="col-md-6">
                            <p class="f-10 text-dark-grey f-10">
                                <span role="button" class="btn-copy rounded" data-toggle="tooltip"
                                    data-original-title="@lang('letter::app.clickToCopy')"
                                    data-clipboard-target="#letter-variable-{{ $variable->name }}">
                                    <i class="fa fa-copy mx-1"></i></span>
                                <span id="letter-variable-{{ $variable->name }}">{{ $variable->value }}</span>
                            </p>
                        </div>
                    @endforeach
                </div>

                <x-form-actions>
                    <x-forms.button-primary id="save-letter" icon="check">@lang('app.save')</x-forms.button-primary>
                    <x-forms.button-cancel :link="route('letter.generate.index')" class="border-0 mr-3">@lang('app.cancel')
                    </x-forms.button-cancel>

                </x-form-actions>

            </div>


            <div>

            </div>
        </x-form>

    </div>

    <div class="col-sm-6">
        <!-- Right side preview -->
        <div class="card bg-white rounded">
            <h4 class="mb-0 p-20 f-21 font-weight-normal border-bottom">
                @lang('letter::app.previewLetter')

                <span class="float-right">
                    <button id="downloadButton" class="btn btn-primary py-1 px-2 f-14">
                        @lang('letter::app.download')
                    </button>

                    <button id="printButton" class="btn btn-success  py-1 px-2 f-14">
                        @lang('letter::app.print')
                    </button>
                </span>
            </h4>

            <div class="col-md-12 p-0 text-wrap ql-editor" id="descriptionPreviewArea"
                style="overflow-y: auto; overflow-x: hidden;">
                <div id="descriptionPreview"></div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        quillImageLoad('#description');
        var employeeLetterVariable = @json($employeeLetterVariable);
        var quill = quillArray['#description'];
        var descriptionPreview = $('#descriptionPreview');

        function generatePreview(content = '') {
            var result = content || quill.root.innerHTML;

            // replace all letter variables
            for (const [key, value] of Object.entries(employeeLetterVariable)) {
                result = result.replaceAll(key, value);
            }

            descriptionPreview.html(result);
            setPreviewPadding();
        }

        function setEmployeeName() {
            let employeeName = $('#employeeName').val();
            employeeLetterVariable['##EMPLOYEE_NAME##'] = employeeName;
            generatePreview();
            $('#employeeNameField').removeClass('d-none');
        }

        function setPreviewPadding() {
            let left = $('#left').val() || 0;
            let right = $('#right').val() || 0;
            let top = $('#top').val() || 0;
            let bottom = $('#bottom').val() || 0;

            descriptionPreview.css({
                "padding-left": left + "px",
                "padding-right": right + "px",
                "padding-top": top + "px",
                "padding-bottom": bottom + "px"
            });
        }

        quill.on('text-change', function() {
            $('#description-text').val(quill.root.innerHTML);
            generatePreview();
        });

        $('#downloadButton').on('click', function() {
            var url = "{{ route('letter.download.preview.store') }}";

            $.easyAjax({
                url: url,
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    description: $('#descriptionPreviewArea').html()
                },
                success: function(response) {
                    window.location.href = response.url;
                }
            });
        });

        $('#printButton').on('click', function() {
            let printFrame = document.createElement('iframe');
            let html = '<html><head><title>Print</title><link type="text/css" rel="stylesheet" media="all" href="{{ asset('css/main.css') }}"></';
            html += 'head><body class="text-wrap ql-editor">';
            html += $('#descriptionPreviewArea').html();
            html += '</body></html>';
            printFrame.style.display = 'none';
            document.body.appendChild(printFrame);

            printFrame.contentDocument.open();
            printFrame.contentDocument.write(html);
            printFrame.contentDocument.close();

            printFrame.onload = function() {
                printFrame.contentWindow.print();
                printFrame.contentWindow.onafterprint = function() {
                    document.body.removeChild(printFrame);
                };
            };
        });

        $('#letterForm').on('input', '#left, #right, #top, #bottom', function() {
            setPreviewPadding();
        });

        $('#letterForm').on('change', '#template_id', function() {
            var letterId = $("#template_id").val();
            var url = "{{ route('letter.ajax.template', ':id') }}";
            url = url.replace(':id', letterId);

            $.easyAjax({
                url: url,
                type: "GET",
                container: '#letterForm',
                blockUI: true,
                redirect: true,
                success: function(response) {
                    quill.pasteHTML(response.letter.description);
                    generatePreview();
                }
            });
        });

        $('body').on('input', '#employeeName', function() {
            setEmployeeName();
        });

        $('#letterForm').on('change', '#employees', function() {
            var employeeId = $("#employees").val();
            employeeLetterVariable = {};

            if (employeeId == '') {
                setEmployeeName();
                return;
            }

            $('#employeeNameField').addClass('d-none');

            var url = "{{ route('letter.employee', ':id') }}";
            url = url.replace(':id', employeeId);

            $.easyAjax({
                url: url,
                type: "GET",
                container: '#letterForm',
                blockUI: true,
                redirect: true,
                success: function(response) {
                    employeeLetterVariable = response.employeeLetterVariable;
                    generatePreview();
                }
            });
        });

        $('#save-letter').click(function() {
            var url = "{{ route('letter.generate.store') }}";

            $.easyAjax({
                url: url,
                container: '#letterForm',
                type: "POST",
                blockUI: true,
                buttonSelector: "#save-letter",
                disableButton: true,
                data: $('#letterForm').serialize(),
            });
        });

        const clipboard = new ClipboardJS('.btn-copy');

        clipboard.on('success', function(e) {
            Swal.fire({
                icon: 'success',
                text: "{{ __('app.copied') }}",
                toast: true,
                position: 'top-end',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                customClass: {
                    confirmButton: 'btn btn-primary',
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
            })
        });

        generatePreview();

        init(RIGHT_MODAL);
    });
</script>
