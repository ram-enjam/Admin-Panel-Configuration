<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Honey Drugs Admin Panel</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/plugins/ui/jqueryui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/css/pages/page-users.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/css/filepond.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/css/filepond-plugin-image-preview.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/app-assets/vendors/css/tables/datatable/datatables.min.css"> -->
    <!-- END: Custom CSS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .breadcrumb {
            padding-left: 25px !important;
        }

        .col-sm-12 {
            padding: 0;
        }

        .card-body {
            padding: 15px;
        }

        .btn {
            padding: 6px 8px;
        }

        tr.mark-unread {
            background-color: #1e9ff21a !important;
        }

        tr.mark-read {
            background-color: #fff !important;
        }

        input[type="date"] {
            /* border: none; */
            box-sizing: border-box;
            outline: 0;
            padding: .75rem;
            position: relative;
            width: 100%;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }
    </style>
</head>