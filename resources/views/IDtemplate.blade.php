<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-link:hover {
            background-color: #F6B923;
            border-right: 2px solid black;
            /* Adjust the border width and color as needed */
            border-radius: 20px 0 0 20px;
            /* Adjust the border-radius values as needed */
        }
    </style>

</head>

<body class="sb-nav-fixed" style="background: hsl(43, 66%, 66%)">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Home</a></li>
                    <li><a class="dropdown-item" href="#!">Notification</a></li>
                    <li><a class="dropdown-item" href="#!">Help & Support</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/rntvs_logo.png') }}" alt="" style="width:110px;">
                </div>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="/dashboard">
                            Dashboard
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link" href="/card_template">
                            ID Card Template
                        </a>
                        <a class="nav-link" href="/card_printing">
                            ID Card Printing
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <section class="content  text-dark">
                    <div class="container-fluid">


                        <style>
                            #id-card-field {
                                width: 2.5in;
                                height: 3.5in;
                                position: relative;
                                background: #fff;
                            }

                            #id-card-field .field-item {
                                position: absolute;
                                margin: 3px 5px;
                            }

                            #id-card-field .field-item.focus::before {
                                content: "0";
                                position: relative;
                                width: 100%;
                                height: 100%;
                                border: 1px pink;
                            }

                            #id-card-field .field-item[data-type="textfield"] {
                                padding: 3px 5px;
                            }

                            #id-card-field .field-item.img {
                                width: 50px;
                                height: 50px;
                            }

                            #id-card-field .field-item>img {
                                width: 100%;
                                height: 100%;
                                object-fit: fill;
                                object-position: center center;
                            }

                            .remove_field {
                                cursor: pointer;
                            }
                        </style>
                        <div class="card card-outline card-primary">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="" id="template-form">
                                        <div class="row">
                                            <div class="col-4">
                                                <div id="msg"></div>
                                                <input type="hidden" name="id" value="1">
                                                <input type="hidden" name="template_image">
                                                <textarea name="template_code" class="d-none"></textarea>
                                                <div class="form-group">
                                                    <label for="name" class="control-label">Template Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="form-control form-control-sm rounded-0" required=""
                                                        value="Sample Template">
                                                </div>
                                                <div class="form-group border-bottom border-dark">
                                                    <label for="" class="control-label">Base Size
                                                        (Inches)</label>
                                                    <div class="row mb-1">
                                                        <label for=""
                                                            class="control-label col-4">Height</label>
                                                        <input type="number" setp="any" name="height"
                                                            value="3.5"
                                                            class="form-control form-control-sm rounded-0 col-5">
                                                    </div>
                                                    <div class="row mb-1">
                                                        <label for=""
                                                            class="control-label col-4">Width</label>
                                                        <input type="number" setp="any" name="width"
                                                            value="2.5"
                                                            class="form-control form-control-sm rounded-0 col-5">
                                                    </div>
                                                </div>
                                                <div class="form-group border-bottom border-dark mb-1 pb-1">
                                                    <label for="" class="control-label">Background
                                                        Image</label>
                                                    <input type="file" name="img_src"
                                                        onchange="displayImg(this,$(this))"
                                                        class="form-control form-control-sm rounded-0">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Field</label>
                                                    <select id="select_field"
                                                        class="custom-select custom-select-sm rounded-0">
                                                        <option value="textfield">Text Field</option>
                                                        <option value="image">Image</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-sm btn-info rounded-0 p-1" id="add_field"
                                                        type="button">Add Field</button>
                                                </div>
                                                <div id="field-form"></div>
                                            </div>
                                            <div
                                                class="col-8 d-flex justify-content-center bg-dark py-3 rounded align-items-center">
                                                <div id="id-card-field" class="border border-dark"
                                                    style="background: url(&quot;data:image/jpeg;base64,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&quot;) 0% 0% / cover no-repeat;">

                                                    <div class="field-item img ui-draggable ui-draggable-handle"
                                                        data-type="image" id="ImageField1"
                                                        style="height: 28%; width: 36%; border-width: 1px; border-style: solid; border-color: rgb(231, 20, 20); top: 33%; left: 29%;">
                                                        <img accept="image/*" data-id="ImageField1"
                                                            src="data:image/png;base64,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">
                                                    </div>
                                                    <div class="field-item ui-draggable ui-draggable-handle"
                                                        data-type="textfield" id="TextField2"
                                                        style="color: rgb(249, 247, 251); border-color: rgb(255, 255, 255); text-align: center; top: 65%; left: 9%; font-weight: bolder; border-bottom-width: 1px; border-bottom-style: solid; width: 80%;">
                                                        Employee Name</div>
                                                    <div class="field-item img ui-draggable ui-draggable-handle"
                                                        data-type="image" id="ImageField3"
                                                        style="border-color: rgb(255, 255, 255); top: 3.99868%; left: 3.57588%; height: 15%; width: 19%; border-bottom-width: 1px; border-bottom-style: solid; border-left-width: 1px; border-left-style: solid;">
                                                        <img accept="image/*" data-id="ImageField3"
                                                            src="data:image/jpeg;base64,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">
                                                    </div>
                                                    <div class="field-item" data-type="textfield" id="TextField4"
                                                        style="top: 5%; left: 25%; border-bottom: none; width: 70%; font-style: unset;">
                                                        Company Name</div>
                                                    <div class="field-item ui-draggable ui-draggable-handle"
                                                        data-type="textfield" id="TextField5"
                                                        style="color: rgb(255, 255, 255); border-top-color: rgb(255, 255, 255); border-right-color: rgb(255, 255, 255); border-bottom: none; border-left-color: rgb(255, 255, 255); text-align: center; top: 74%; left: 9%; width: 80%; font-style: italic; font-weight: bolder;">
                                                        Designation</div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <script>
                                    $(function() {
                                        data_func();
                                    })
                                </script>
                            </div>
                            <div class="card-footer">
                                <div class="col-md-12">
                                    <div class="row">
                                        <button class="btn btn-sm btn-primary mr-2" form="template-form">Save</button>
                                        <a class="btn btn-sm btn-secondary" href="./?page=templates">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <id id="preview"></id>
                        </div>
                        <style>
                            img#cimg {
                                height: 15vh;
                                width: 15vh;
                                object-fit: cover;
                                border-radius: 100% 100%;
                            }
                        </style>
                        <div id="align-text-clone" class="d-none">
                            <select name="text_align" class="custom-select custom-select-sm">
                                <option value="left">Left</option>
                                <option value="right">Right</option>
                                <option value="center">Center</option>
                            </select>
                        </div>
                        <script>
                            $(function() {
                                $('[name="height"],[name="width"]').keyup(function() {
                                    var height = $('[name="height"]').val();
                                    var width = $('[name="width"]').val();
                                    $('#id-card-field').css({
                                        height: height + 'in',
                                        width: width + 'in'
                                    })
                                })
                            })

                            function displayImg(input, _this) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var _base64, type;
                                        var data = e.target.result
                                        data = data.split(';base64,')
                                        $('#id-card-field').css({
                                            'background': 'url(' + (e.target.result) + ')',
                                            'background-repeat': 'no-repeat',
                                            'background-size': 'cover'
                                        });
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            $('#template-form').submit(function(e) {
                                e.preventDefault();
                                var _this = $(this)
                                start_loader()
                                $('#form-field').html('')
                                var wait_until = new Promise((resolve, reject) => {
                                    $('[name="template_code"]').val($('#id-card-field').parent().html())
                                    html2canvas(document.getElementById('id-card-field')).then(function(canvas) {
                                        // console.log(canvas.toDataURL('image/png'))
                                        $('[name="template_image"]').val(canvas.toDataURL('image/png'))
                                        resolve();
                                        // document.getElementById('preview').appendChild(canvas);
                                    });
                                });
                                wait_until.then(function() {

                                    $.ajax({
                                        url: _base_url_ + 'classes/Master.php?f=save_template',
                                        data: new FormData($('#template-form')[0]),
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        method: 'POST',
                                        type: 'POST',
                                        dataType: 'json',
                                        error: err => {
                                            console.log(err)
                                            alert_toast("An error occured", 'error');
                                            end_loader();
                                        },
                                        success: function(resp) {
                                            if (typeof resp == 'object' && resp.status == 'success') {
                                                location.href = './?page=templates';
                                            } else if (resp.status == 'failed' && !!resp.msg) {
                                                var el = $('<div>')
                                                el.addClass("alert alert-danger err-msg").text(resp.msg)
                                                _this.prepend(el)
                                                el.show('slow')
                                                $("html, body").animate({
                                                    scrollTop: 0
                                                }, "fast");
                                            } else {
                                                alert_toast("An error occured", 'error');
                                                console.log(resp)
                                            }
                                            end_loader()
                                        }
                                    })
                                })

                            })
                            $(function() {
                                $('.select2').select2()
                                $('.select2-selection').addClass('form-control form-control-sm rounded-0 rounded-0')

                                $('#add_field').click(function() {
                                    var _ft = $('#select_field').val()
                                    var _this = $(this)
                                    show_form(_ft, _this)
                                })
                            })

                            function show_form(_ft, _this, __id = '') {
                                if (_ft == 'textfield') {
                                    var id = (__id != "" ? __id : "TextField" + ($('#id-card-field .field-item').length + 1))
                                    var fg = $("<div class='form-group pb-1 mb-1 border-bottom border-dark form-item' data-id='" + id + "'>")
                                    var _title = id;
                                    var input;
                                    fg.append("<label class='control-label'>" + _title +
                                        "<a class='badge badge-danger ml-2 remove_field' data-id='" + id + "'> Remove</a></label>")
                                    // Field ID NAME
                                    input = $("<div class='row'>")
                                    input.find('input').val(id)
                                    fg.append(input)
                                    // TExt
                                    input.append(
                                        '<label class="col-4">Text</label><input class="form-control form-control-sm rounded-0 col-7" name="text_value" data-id="' +
                                        id + '"/>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // Font Color
                                    input.append(
                                        '<label class="col-4">Font Color</label><input class="form-control form-control-sm rounded-0 col-7 colorpicker1" name="font_color" data-id="' +
                                        id + '"/>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // font style
                                    input.append(
                                        '<label class="col-4">Font Style</label><div class="col-8"><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="bold" name="style" data-id="' +
                                        id +
                                        '"/> <b>Bold</b></label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="italic" name="style" data-id="' +
                                        id + '"/> <i>Italic</i></label></div>')
                                    // width
                                    input.append(
                                        '<label class="col-4">Width</label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="size[]" data-size="width" data-id="' +
                                        id + '"/><label class="col-4">(%)</label>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')

                                    // text-align
                                    var text_select = $('#align-text-clone').clone()
                                    text_select.find('select').attr('data-id', id)
                                    text_select.find('select').addClass('col-7')
                                    input.append('<label class="col-4">Align Text</label>' + text_select.html())
                                    input.append('<div class="clearfix col-12 mb-2"></div>')

                                    // Borders
                                    input.append(
                                        '<label class="col-4">Border</label><div class="col-8"><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="top" name="border" data-id="' +
                                        id +
                                        '"/> Top</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="bottom" name="border" data-id="' +
                                        id +
                                        '"/> bottom</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="left" name="border" data-id="' +
                                        id +
                                        '"/> Left</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="right" name="border" data-id="' +
                                        id + '"/> Right</label></div>')
                                    // Border Color
                                    input.append(
                                        '<label class="col-4">Borde Color</label><input class="form-control form-control-sm rounded-0 col-7 colorpicker1" name="border_color" data-id="' +
                                        id + '"/>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // Element Position
                                    input.append(
                                        '<label class="col-4">Position</label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="position[]" data-pos="top" data-id="' +
                                        id + '"/><label class="col-4">Top (%)</label>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    input.append(
                                        '<label class="col-4"></label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="position[]" data-pos="left" data-id="' +
                                        id + '"/><label class="col-4">Left (%)</label>')

                                    fg.append(input)
                                    is_form_exists = $("#field-form .form-item[data-id='" + id + "']").length;
                                    if (__id == "" || (__id != "" && is_form_exists <= 0))
                                        $("#field-form").html(fg);
                                    if (__id != "") {
                                        $('[name="font_color"]').val(_this.css('color')).trigger('change')
                                        if (_this.css('font-weight') > 400)
                                            $('input[name="style"][value="bold"]').attr('checked', true)
                                        if (_this.css('font-style') == "italic")
                                            $('input[name="style"][value="italic"]').attr('checked', true)
                                        if (_this.css('border-top').includes("px solid") == true)
                                            $('input[name="border"][value="top"]').attr('checked', true)
                                        if (_this.css('border-bottom').includes("px solid") == true)
                                            $('input[name="border"][value="bottom"]').attr('checked', true)
                                        if (_this.css('border-left').includes("px solid") == true)
                                            $('input[name="border"][value="left"]').attr('checked', true)
                                        if (_this.css('border-right').includes("px solid") == true)
                                            $('input[name="border"][value="right"]').attr('checked', true)
                                        $('[name="border_color"]').val(_this.css('border-color')).trigger('change')
                                        if (_this.css('text-align') != "")
                                            $('[name="text_align"]').val(_this.css('text-align')).trigger('change')
                                        $('[name="text_value"]').val(_this.text())

                                        var parent = _this.parent()
                                        var pos = {};
                                        var nt, nl;
                                        style = _this.attr('style')
                                        style = style.replace(/ /g, '')
                                        style = style.split(";")
                                        Object.keys(style).map(k => {
                                            if (style[k] != '') {
                                                prop = style[k].split(':')
                                                prop1 = prop[0];
                                                prop2 = !!prop[1] ? prop[1] : '';
                                                pos[prop1] = prop2
                                            }
                                        })
                                        var left = !!pos.left ? (pos.left).replace("%", '') : 0;
                                        var top = !!pos.top ? (pos.top).replace("%", '') : 0;
                                        nt = top
                                        nl = left
                                        $('input[name="position[]"][data-pos="top"]').val(nt).trigger("change")
                                        $('input[name="position[]"][data-pos="left"]').val(nl).trigger("change")
                                    }

                                    // field Item
                                    var item = $('<div class="field-item" data-type="' + _ft + '">');
                                    item.attr('id', id)
                                    item.text(id)
                                    if (__id == '') {
                                        $('#id-card-field').append(item);
                                    }
                                    data_func();
                                } else {
                                    var id = (__id != "" ? __id : "ImageField" + ($('#id-card-field .field-item').length + 1))
                                    var fg = $("<div class='form-group pb-1 mb-1 border-bottom border-dark form-item' data-id='" + id + "'>")
                                    var _title = id;
                                    var input;
                                    fg.append("<label class='control-label'>" + _title + "</label>")
                                    // Field ID NAME
                                    input = $("<div class='row'>")
                                    input.find('input').val(id)
                                    fg.append(input)
                                    // File input
                                    input.append(
                                        '<label class="col-4">Font Color</label><input type="file" class="form-control form-control-sm rounded-0 col-7" name="filename" data-id="' +
                                        id + '"/>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // Element Size
                                    input.append(
                                        '<label class="col-4">Image Size</label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="size[]" data-size="height" data-id="' +
                                        id + '"/><label class="col-4">Height (%)</label>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    input.append(
                                        '<label class="col-4"></label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="size[]" data-size="width" data-id="' +
                                        id + '"/><label class="col-4">Width (%)</label>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // Borders
                                    input.append(
                                        '<label class="col-4">Border</label><div class="col-8"><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="top" name="border" data-id="' +
                                        id +
                                        '"/> Top</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="bottom" name="border" data-id="' +
                                        id +
                                        '"/> bottom</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="left" name="border" data-id="' +
                                        id +
                                        '"/> Left</label><label class="d-flex align-items-center"><input type="checkbox" class="mr-2" value="right" name="border" data-id="' +
                                        id + '"/> Right</label></div>')
                                    // Border Color
                                    input.append(
                                        '<label class="col-4">Borde Color</label><input class="form-control form-control-sm rounded-0 col-7 colorpicker1" name="border_color" data-id="' +
                                        id + '"/>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    // Element Position
                                    input.append(
                                        '<label class="col-4">Position</label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="position[]" data-pos="top" data-id="' +
                                        id + '"/><label class="col-4">Top (%)</label>')
                                    input.append('<div class="clearfix col-12 mb-2"></div>')
                                    input.append(
                                        '<label class="col-4"></label><input class="form-control form-control-sm rounded-0 col-4 " type="number" step="any" name="position[]" data-pos="left" data-id="' +
                                        id + '"/><label class="col-4">Left (%)</label>')

                                    fg.append(input)
                                    is_form_exists = $("#field-form .form-item[data-id='" + id + "']").length;
                                    if (__id == "" || (__id != "" && is_form_exists <= 0))
                                        $("#field-form").html(fg);
                                    if (__id != "") {
                                        $('[name="font_color"]').val(_this.css('color')).trigger('change')
                                        if (_this.css('font-weight') > 400)
                                            $('input[name="style"][value="bold"]').attr('checked', true)
                                        if (_this.css('font-style') == "italic")
                                            $('input[name="style"][value="italic"]').attr('checked', true)
                                        if (_this.css('border-top').includes("px solid") == true)
                                            $('input[name="border"][value="top"]').attr('checked', true)
                                        if (_this.css('border-bottom').includes("px solid") == true)
                                            $('input[name="border"][value="bottom"]').attr('checked', true)
                                        if (_this.css('border-left').includes("px solid") == true)
                                            $('input[name="border"][value="left"]').attr('checked', true)
                                        if (_this.css('border-right').includes("px solid") == true)
                                            $('input[name="border"][value="right"]').attr('checked', true)
                                        $('[name="border_color"]').val(_this.css('border-color')).trigger('change')




                                        var parent = _this.parent()
                                        var pos = {};
                                        var nt, nl;
                                        style = _this.attr('style')
                                        if (style !== undefined) {
                                            style = style.replace(/ /g, '')
                                            style = style.split(";")
                                            Object.keys(style).map(k => {
                                                if (style[k] != '') {
                                                    prop = style[k].split(':')
                                                    prop1 = prop[0];
                                                    prop2 = !!prop[1] ? prop[1] : '';
                                                    pos[prop1] = prop2
                                                }
                                            })
                                            var left = !!pos.left ? (pos.left).replace("%", '') : 0;
                                            var top = !!pos.top ? (pos.top).replace("%", '') : 0;
                                            var height = !!pos.height ? (pos.height).replace("%", '') : 0;
                                            var width = !!pos.width ? (pos.width).replace("%", '') : 0;
                                            nt = top
                                            nl = left
                                            $('input[name="position[]"][data-pos="top"]').val(nt).trigger("change")
                                            $('input[name="position[]"][data-pos="left"]').val(nl).trigger("change")
                                            $('input[name="size[]"][data-size="height"]').val(height).trigger("change")
                                            $('input[name="size[]"][data-size="width"]').val(width).trigger("change")
                                        }
                                    }

                                    // field Item
                                    var item = $('<div class="field-item img" data-type="' + _ft + '">');
                                    item.attr('id', id)
                                    item.append("<img  accept='image/*' data-id='" + id +
                                        "' src='http://localhost/id_generator/dist/img/no-image-available.png'/>")
                                    if (__id == '') {
                                        $('#id-card-field').append(item);
                                    }
                                    data_func();
                                }
                            }

                            function data_func() {
                                $('.colorpicker1').colorpicker({
                                    format: 'hex'
                                })
                                $('[name="font_color"]').on('input change keyup keypress', function() {
                                    var el_id = $(this).attr('data-id');
                                    var color = $(this).val()
                                    $('#' + el_id).css({
                                        "color": color
                                    });
                                })
                                $('[name="border"]').change(function() {
                                    var pos = $(this).val()
                                    var el_id = $(this).attr('data-id');
                                    var _style = "border-" + pos;
                                    if ($(this).is(":checked") == true) {
                                        $('#' + el_id).css(_style, "1px solid");
                                    } else {
                                        $('#' + el_id).css(_style, "none");
                                    }
                                })
                                $('[name="style"]').change(function() {
                                    var val = $(this).val()
                                    var style = $(this).attr('name')
                                    var el_id = $(this).attr('data-id');
                                    if ($(this).is(":checked") == true) {
                                        if (val == 'bold')
                                            $('#' + el_id).css("font-weight", "bolder");
                                        else
                                            $('#' + el_id).css("font-style", "italic");
                                    } else {
                                        if (val == 'bold')
                                            $('#' + el_id).css("font-weight", "unset");
                                        else
                                            $('#' + el_id).css("font-style", "unset");
                                    }
                                })
                                $('[name="border_color"]').on('input change keyup keypress', function() {
                                    var el_id = $(this).attr('data-id');
                                    var color = $(this).val()
                                    $('#' + el_id).css("border-color", color);
                                })
                                $('[name="text_value"]').on('input change keyup keypress', function() {
                                    var el_id = $(this).attr('data-id');
                                    var txt = $(this).val()
                                    $('#' + el_id).text(txt);
                                })
                                $('[name="position[]"]').on('input keypress keyup change', function() {
                                    var el_id = $(this).attr('data-id');
                                    var pos = $(this).attr('data-pos')
                                    var val = $(this).val()
                                    $('#' + el_id).css(pos, val + "%");

                                })
                                $('[name="size[]"]').on('input keypress keyup change', function() {
                                    var el_id = $(this).attr('data-id');
                                    var pos = $(this).attr('data-size')
                                    var val = $(this).val()
                                    $('#' + el_id).css(pos, val + "%");

                                })
                                $('[name="text_align"]').change(function() {
                                    var el_id = $(this).attr('data-id');
                                    var val = $(this).val()
                                    $('#' + el_id).css('text-align', val);

                                })
                                $('[name="filename"]').change(function() {
                                    var id = $(this).attr('data-id')
                                    input = document.querySelector('input[name="filename"][data-id="' + id + '"]')
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function(e) {
                                            var _base64, type;
                                            var data = e.target.result
                                            data = data.split(';base64,')
                                            $('img[data-id="' + id + '"]').attr("src", e.target.result);
                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                })
                                $('.remove_field').click(function() {
                                    var id = $(this).attr('data-id')
                                    $('.field-item#' + id).remove()
                                    $('#field-form').html('')
                                })
                                $('.field-item').on('mousedown', function() {
                                    var _ft = $(this).attr('data-type')
                                    var _this = $(this)
                                    show_form(_ft, _this, _this.attr('id'))
                                    if (_this.hasClass('ui-draggable') == false) {
                                        _this.draggable({
                                            containment: "parent",
                                            stop: function(event, ui) {
                                                var id = event.target.id
                                                var parent = $('#' + id).parent()
                                                var p_height = parent.height()
                                                var p_width = parent.width()
                                                var pos = {};
                                                var nt, nl;
                                                style = $('#' + id).attr('style')
                                                style = style.replace(/ /g, '')
                                                style = style.split(";")
                                                Object.keys(style).map(k => {
                                                    if (style[k] != '') {
                                                        prop = style[k].split(':')
                                                        prop1 = prop[0];
                                                        prop2 = !!prop[1] ? prop[1] : '';
                                                        pos[prop1] = prop2
                                                    }
                                                })
                                                var left = !!pos.left ? (pos.left).replace("px", '') : 0;
                                                var top = !!pos.top ? (pos.top).replace("px", '') : 0;
                                                nt = ((parseFloat(top) / parseFloat(p_height)) * 100)
                                                nl = ((parseFloat(left) / parseFloat(p_width)) * 100)
                                                $('input[name="position[]"][data-pos="top"]').val(nt).trigger("change")
                                                $('input[name="position[]"][data-pos="left"]').val(nl).trigger("change")
                                            }
                                        })
                                    }
                                })

                            }
                        </script>
                    </div>
                </section>
            </main>

            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="assets/demo/chart-pie-demo.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

    <script>
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        });
    </script>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar'); // Assuming you have a sidebar with the id "sidebar"

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('show'); // Add a CSS class to show/hide the sidebar
        });
    </script>

</body>

</html>
