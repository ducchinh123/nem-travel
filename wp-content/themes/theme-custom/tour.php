<?php
/*
    Template Name: Tour Page
*/
?>
<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>
<style>
    .tour-modal-request {
        padding-top: 20px
    }

    .tour-modal-request .modal-content {
        border-radius: 4px;
        border-top: solid 6px #f79321
    }

    .tour-modal-request {
        font-size: 14px;
        color: #555863
    }

    .tour-modal-request.centered-modal {
        transition: opacity 0s ease-in-out
    }

    .tour-modal-request.centered-modal.in {
        display: flex !important
    }

    .tour-modal-request.centered-modal .modal-dialog {
        align-self: center
    }

    @media only screen and (min-width:768px) {
        .tour-modal-request .modal-dialog {
            width: 440px
        }
    }

    .tour-modal-request .modal-body {
        padding: 0
    }

    .tour-modal-request .modal-body .close-out-side:active {
        text-decoration: inherit;
        color: #a9a9a9 !important
    }

    .tour-modal-request .modal-footer {
        border-top-width: 0;
        padding: 0
    }

    .tour-modal-request .modal-footer .btn {
        cursor: pointer;
        height: 60px;
        border-radius: 5px;
        margin-bottom: 15px
    }

    .tour-modal-request .modal-footer .btn h3 {
        font-size: 18px;
        font-weight: bold;
        margin: 0
    }

    .tour-modal-request .modal-footer .btn h3 small {
        font-size: 14px;
        font-weight: normal;
        color: #fff
    }

    .tour-modal-request .modal__title {
        font-weight: bold;
        line-height: 1.1;
        color: #3d3f47
    }

    .tour-modal-request .modal__title small {
        font-size: 14px;
        font-weight: 300
    }

    .tour-modal-request .modal__container {
        display: flex;
        margin-top: -30px
    }

    .tour-modal-request .modal__sidebar {
        padding: 30px;
        background: #f9fbfc;
        border-radius: 0 6px 6px 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: all .15s ease-in-out
    }

    .tour-modal-request .modal__sidebar .promotion-text {
        font-size: 18px;
        line-height: 1.3
    }

    .tour-modal-request .modal__sidebar .promotion-text .highlight {
        color: #e52822
    }

    .tour-modal-request .modal__sidebar a {
        color: #555863;
        text-decoration: underline
    }

    .tour-modal-request .modal__sidebar .item-1 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-grow: 1
    }

    @media only screen and (min-width:320px) {
        .tour-modal-request .modal__main {
            padding: 30px
        }
    }

    @media only screen and (min-width:480px) {
        .tour-modal-request .modal__main {
            padding: 30px
        }
    }

    .tour-modal-request .modal__list {
        border-radius: 6px;
        border: 1px solid rgba(85, 88, 99, .2);
        padding: 0
    }

    .tour-modal-request .modal__list--item {
        margin: 0;
        padding: 10px 15px
    }

    .tour-modal-request .modal__list--item:not(:last-child) {
        border-bottom: 1px solid rgba(85, 88, 99, .2)
    }

    .tour-modal-request .control-label {
        font-size: 14px;
        font-weight: normal
    }

    .tour-modal-request .date-input-group .icon {
        font-size: 16px;
        position: absolute;
        margin-left: 10px;
        margin-top: 9px
    }

    .tour-modal-request .date-input-group input {
        padding-left: 35px
    }

    .tour-modal-request .form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        box-shadow: inset 0 0 0 0 white
    }

    .tour-modal-request .modal-body .close-out-side {
        position: absolute;
        font-size: 14px;
        opacity: 1;
        box-shadow: none;
        text-shadow: none;
        transition: all .2s ease-in-out;
        margin: 0
    }

    @media only screen and (min-width:320px) {
        .tour-modal-request .modal-body .close-out-side {
            right: 0;
            top: 0;
            color: rgba(108, 112, 126, .8);
            font-size: 10px;
            z-index: 1041 !important;
            padding: 12px
        }
    }

    @media only screen and (max-width:767px) {
        .tour-modal-request .modal-body .close-out-side {
            font-size: 14px;
            margin: 4px !important;
            z-index: 1041 !important;
            right: auto;
            left: 0;
            color: rgba(108, 112, 126, 0)
        }

        .navbar-header .navbar-toggle .fa-bars {
            font-size: 25px
        }
    }

    @media only screen and (min-width:768px) {
        .tour-modal-request .modal-body .close-out-side {
            font-size: 16px;
            margin-top: -40px !important;
            margin-right: -10px !important;
            color: rgba(255, 255, 255, .7) !important
        }

        .tour-modal-request .modal-body .close-out-side:hover {
            color: #fff !important
        }

        .typeahead-container .tt-menu {
            width: 730px !important;
            position: absolute
        }
    }


    /* không phải  */


    /* phải nhé */

    .duoctang b {
        padding-left: 25px !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }

    h1 small,
    h2 small,
    h3 small,
    h4 small,
    h5 small,
    h6 small,
    .h1 small,
    .h2 small,
    .h3 small,
    .h4 small,
    .h5 small,
    .h6 small,
    h1 .small,
    h2 .small,
    h3 .small,
    h4 .small,
    h5 .small,
    h6 .small,
    .h1 .small,
    .h2 .small,
    .h3 .small,
    .h4 .small,
    .h5 .small,
    .h6 .small {
        font-weight: normal;
        line-height: 1;
        color: #777
    }

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3 {
        margin-top: 20px;
        margin-bottom: 10px
    }

    h1 small,
    .h1 small,
    h2 small,
    .h2 small,
    h3 small,
    .h3 small,
    h1 .small,
    .h1 .small,
    h2 .small,
    .h2 .small,
    h3 .small,
    .h3 .small {
        font-size: 65%
    }

    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        margin-top: 10px;
        margin-bottom: 10px
    }

    h4 small,
    .h4 small,
    h5 small,
    .h5 small,
    h6 small,
    .h6 small,
    h4 .small,
    .h4 .small,
    h5 .small,
    .h5 .small,
    h6 .small,
    .h6 .small {
        font-size: 75%
    }

    h1,
    .h1 {
        font-size: 36px
    }

    h2,
    .h2 {
        font-size: 30px
    }

    h3,
    .h3 {
        font-size: 24px
    }

    h4,
    .h4 {
        font-size: 18px
    }

    h5,
    .h5 {
        font-size: 14px
    }

    h6,
    .h6 {
        font-size: 12px
    }

    p {
        margin: 0 0 10px
    }

    .lead {
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.4
    }

    @media(min-width:768px) {
        .lead {
            font-size: 21px
        }
    }

    small,
    .small {
        font-size: 85%
    }

    mark,
    .mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    .text-left {
        text-align: left
    }

    .text-right {
        text-align: right
    }

    .text-center {
        text-align: center
    }

    .text-justify {
        text-align: justify
    }

    .text-nowrap {
        white-space: nowrap
    }

    .text-lowercase {
        text-transform: lowercase
    }

    .text-uppercase {
        text-transform: uppercase
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .text-muted {
        color: #777
    }

    .text-primary {
        color: #337ab7
    }

    a.text-primary:hover,
    a.text-primary:focus {
        color: #286090
    }

    .text-success {
        color: #3c763d
    }

    a.text-success:hover,
    a.text-success:focus {
        color: #2b542c
    }

    .text-info {
        color: #31708f
    }

    a.text-info:hover,
    a.text-info:focus {
        color: #245269
    }

    .text-warning {
        color: #8a6d3b
    }

    a.text-warning:hover,
    a.text-warning:focus {
        color: #66512c
    }

    .text-danger {
        color: #a94442
    }

    a.text-danger:hover,
    a.text-danger:focus {
        color: #843534
    }

    .bg-primary {
        color: #fff;
        background-color: #337ab7
    }

    a.bg-primary:hover,
    a.bg-primary:focus {
        background-color: #286090
    }

    .bg-success {
        background-color: #dff0d8
    }

    a.bg-success:hover,
    a.bg-success:focus {
        background-color: #c1e2b3
    }

    .bg-info {
        background-color: #d9edf7
    }

    a.bg-info:hover,
    a.bg-info:focus {
        background-color: #afd9ee
    }

    .bg-warning {
        background-color: #fcf8e3
    }

    a.bg-warning:hover,
    a.bg-warning:focus {
        background-color: #f7ecb5
    }

    .bg-danger {
        background-color: #f2dede
    }

    a.bg-danger:hover,
    a.bg-danger:focus {
        background-color: #e4b9b9
    }

    .page-header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee
    }

    ul,
    ol {
        margin-top: 0;
        margin-bottom: 10px
    }

    ul ul,
    ol ul,
    ul ol,
    ol ol {
        margin-bottom: 0
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .list-inline {
        padding-left: 0;
        margin-left: -5px;
        list-style: none
    }

    .list-inline>li {
        display: inline-block;
        padding-right: 5px;
        padding-left: 5px
    }

    dl {
        margin-top: 0;
        margin-bottom: 20px
    }

    dt,
    dd {
        line-height: 1.42857143
    }

    dt {
        font-weight: bold
    }

    dd {
        margin-left: 0
    }






    /* phải nhé */


    table {
        background-color: transparent
    }

    caption {
        padding-top: 8px;
        padding-bottom: 8px;
        color: #777;
        text-align: left
    }

    th {
        text-align: left
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd
    }

    .table>thead>tr>th {
        vertical-align: bottom;
        border-bottom: 2px solid #ddd
    }

    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>th,
    .table>caption+thead>tr:first-child>td,
    .table>colgroup+thead>tr:first-child>td,
    .table>thead:first-child>tr:first-child>td {
        border-top: 0
    }

    .table>tbody+tbody {
        border-top: 2px solid #ddd
    }

    .table .table {
        background-color: #fff
    }

    .table-condensed>thead>tr>th,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>tbody>tr>td,
    .table-condensed>tfoot>tr>td {
        padding: 5px
    }

    .table-bordered {
        border: 1px solid #ddd
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        border: 1px solid #ddd
    }

    .table-bordered>thead>tr>th,
    .table-bordered>thead>tr>td {
        border-bottom-width: 2px
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
        background-color: #f9f9f9
    }

    .table-hover>tbody>tr:hover {
        background-color: #f5f5f5
    }

    table col[class*="col-"] {
        position: static;
        display: table-column;
        float: none
    }

    table td[class*="col-"],
    table th[class*="col-"] {
        position: static;
        display: table-cell;
        float: none
    }

    .table>thead>tr>td.active,
    .table>tbody>tr>td.active,
    .table>tfoot>tr>td.active,
    .table>thead>tr>th.active,
    .table>tbody>tr>th.active,
    .table>tfoot>tr>th.active,
    .table>thead>tr.active>td,
    .table>tbody>tr.active>td,
    .table>tfoot>tr.active>td,
    .table>thead>tr.active>th,
    .table>tbody>tr.active>th,
    .table>tfoot>tr.active>th {
        background-color: #f5f5f5
    }

    .table-hover>tbody>tr>td.active:hover,
    .table-hover>tbody>tr>th.active:hover,
    .table-hover>tbody>tr.active:hover>td,
    .table-hover>tbody>tr:hover>.active,
    .table-hover>tbody>tr.active:hover>th {
        background-color: #e8e8e8
    }

    .table>thead>tr>td.success,
    .table>tbody>tr>td.success,
    .table>tfoot>tr>td.success,
    .table>thead>tr>th.success,
    .table>tbody>tr>th.success,
    .table>tfoot>tr>th.success,
    .table>thead>tr.success>td,
    .table>tbody>tr.success>td,
    .table>tfoot>tr.success>td,
    .table>thead>tr.success>th,
    .table>tbody>tr.success>th,
    .table>tfoot>tr.success>th {
        background-color: #dff0d8
    }

    .table-hover>tbody>tr>td.success:hover,
    .table-hover>tbody>tr>th.success:hover,
    .table-hover>tbody>tr.success:hover>td,
    .table-hover>tbody>tr:hover>.success,
    .table-hover>tbody>tr.success:hover>th {
        background-color: #d0e9c6
    }

    .table>thead>tr>td.info,
    .table>tbody>tr>td.info,
    .table>tfoot>tr>td.info,
    .table>thead>tr>th.info,
    .table>tbody>tr>th.info,
    .table>tfoot>tr>th.info,
    .table>thead>tr.info>td,
    .table>tbody>tr.info>td,
    .table>tfoot>tr.info>td,
    .table>thead>tr.info>th,
    .table>tbody>tr.info>th,
    .table>tfoot>tr.info>th {
        background-color: #d9edf7
    }

    .table-hover>tbody>tr>td.info:hover,
    .table-hover>tbody>tr>th.info:hover,
    .table-hover>tbody>tr.info:hover>td,
    .table-hover>tbody>tr:hover>.info,
    .table-hover>tbody>tr.info:hover>th {
        background-color: #c4e3f3
    }

    .table>thead>tr>td.warning,
    .table>tbody>tr>td.warning,
    .table>tfoot>tr>td.warning,
    .table>thead>tr>th.warning,
    .table>tbody>tr>th.warning,
    .table>tfoot>tr>th.warning,
    .table>thead>tr.warning>td,
    .table>tbody>tr.warning>td,
    .table>tfoot>tr.warning>td,
    .table>thead>tr.warning>th,
    .table>tbody>tr.warning>th,
    .table>tfoot>tr.warning>th {
        background-color: #fcf8e3
    }

    .table-hover>tbody>tr>td.warning:hover,
    .table-hover>tbody>tr>th.warning:hover,
    .table-hover>tbody>tr.warning:hover>td,
    .table-hover>tbody>tr:hover>.warning,
    .table-hover>tbody>tr.warning:hover>th {
        background-color: #faf2cc
    }

    .table>thead>tr>td.danger,
    .table>tbody>tr>td.danger,
    .table>tfoot>tr>td.danger,
    .table>thead>tr>th.danger,
    .table>tbody>tr>th.danger,
    .table>tfoot>tr>th.danger,
    .table>thead>tr.danger>td,
    .table>tbody>tr.danger>td,
    .table>tfoot>tr.danger>td,
    .table>thead>tr.danger>th,
    .table>tbody>tr.danger>th,
    .table>tfoot>tr.danger>th {
        background-color: #f2dede
    }

    .table-hover>tbody>tr>td.danger:hover,
    .table-hover>tbody>tr>th.danger:hover,
    .table-hover>tbody>tr.danger:hover>td,
    .table-hover>tbody>tr:hover>.danger,
    .table-hover>tbody>tr.danger:hover>th {
        background-color: #ebcccc
    }

    .table-responsive {
        min-height: .01%;
        overflow-x: auto
    }

    @media screen and (max-width:767px) {
        .table-responsive {
            width: 100%;
            margin-bottom: 15px;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #ddd
        }

        .table-responsive>.table {
            margin-bottom: 0
        }

        .table-responsive>.table>thead>tr>th,
        .table-responsive>.table>tbody>tr>th,
        .table-responsive>.table>tfoot>tr>th,
        .table-responsive>.table>thead>tr>td,
        .table-responsive>.table>tbody>tr>td,
        .table-responsive>.table>tfoot>tr>td {
            white-space: nowrap
        }

        .table-responsive>.table-bordered {
            border: 0
        }

        .table-responsive>.table-bordered>thead>tr>th:first-child,
        .table-responsive>.table-bordered>tbody>tr>th:first-child,
        .table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .table-responsive>.table-bordered>thead>tr>td:first-child,
        .table-responsive>.table-bordered>tbody>tr>td:first-child,
        .table-responsive>.table-bordered>tfoot>tr>td:first-child {
            border-left: 0
        }

        .table-responsive>.table-bordered>thead>tr>th:last-child,
        .table-responsive>.table-bordered>tbody>tr>th:last-child,
        .table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .table-responsive>.table-bordered>thead>tr>td:last-child,
        .table-responsive>.table-bordered>tbody>tr>td:last-child,
        .table-responsive>.table-bordered>tfoot>tr>td:last-child {
            border-right: 0
        }

        .table-responsive>.table-bordered>tbody>tr:last-child>th,
        .table-responsive>.table-bordered>tfoot>tr:last-child>th,
        .table-responsive>.table-bordered>tbody>tr:last-child>td,
        .table-responsive>.table-bordered>tfoot>tr:last-child>td {
            border-bottom: 0
        }
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        display: block;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: inherit;
        color: #333;
        border: 0;
        border-bottom: 1px solid #e5e5e5
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: bold
    }

    input[type="search"] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 4px 0 0;
        margin-top: 1px \9;
        line-height: normal
    }

    input[type="file"] {
        display: block
    }

    input[type="range"] {
        display: block;
        width: 100%
    }

    select[multiple],
    select[size] {
        height: auto
    }

    input[type="file"]:focus,
    input[type="radio"]:focus,
    input[type="checkbox"]:focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    output {
        display: block;
        padding-top: 7px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
    }

    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .form-control:-ms-input-placeholder {
        color: #999
    }

    .form-control::-webkit-input-placeholder {
        color: #999
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #eee;
        opacity: 1
    }

    .form-control[disabled],
    fieldset[disabled] .form-control {
        cursor: not-allowed
    }

    textarea.form-control {
        height: auto
    }

    input[type="search"] {
        -webkit-appearance: none
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {

        input[type="date"].form-control,
        input[type="time"].form-control,
        input[type="datetime-local"].form-control,
        input[type="month"].form-control {
            line-height: 34px
        }

        input[type="date"].input-sm,
        input[type="time"].input-sm,
        input[type="datetime-local"].input-sm,
        input[type="month"].input-sm,
        .input-group-sm input[type="date"],
        .input-group-sm input[type="time"],
        .input-group-sm input[type="datetime-local"],
        .input-group-sm input[type="month"] {
            line-height: 30px
        }

        input[type="date"].input-lg,
        input[type="time"].input-lg,
        input[type="datetime-local"].input-lg,
        input[type="month"].input-lg,
        .input-group-lg input[type="date"],
        .input-group-lg input[type="time"],
        .input-group-lg input[type="datetime-local"],
        .input-group-lg input[type="month"] {
            line-height: 46px
        }
    }

    .form-group {
        margin-bottom: 15px
    }

    .radio,
    .checkbox {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px
    }

    .radio label,
    .checkbox label {
        min-height: 20px;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: normal;
        cursor: pointer
    }

    .radio input[type="radio"],
    .radio-inline input[type="radio"],
    .checkbox input[type="checkbox"],
    .checkbox-inline input[type="checkbox"] {
        position: absolute;
        margin-top: 4px \9;
        margin-left: -20px
    }

    .radio+.radio,
    .checkbox+.checkbox {
        margin-top: -5px
    }

    .radio-inline,
    .checkbox-inline {
        position: relative;
        display: inline-block;
        padding-left: 20px;
        margin-bottom: 0;
        font-weight: normal;
        vertical-align: middle;
        cursor: pointer
    }

    .radio-inline+.radio-inline,
    .checkbox-inline+.checkbox-inline {
        margin-top: 0;
        margin-left: 10px
    }

    input[type="radio"][disabled],
    input[type="checkbox"][disabled],
    input[type="radio"].disabled,
    input[type="checkbox"].disabled,
    fieldset[disabled] input[type="radio"],
    fieldset[disabled] input[type="checkbox"] {
        cursor: not-allowed
    }

    .radio-inline.disabled,
    .checkbox-inline.disabled,
    fieldset[disabled] .radio-inline,
    fieldset[disabled] .checkbox-inline {
        cursor: not-allowed
    }

    .radio.disabled label,
    .checkbox.disabled label,
    fieldset[disabled] .radio label,
    fieldset[disabled] .checkbox label {
        cursor: not-allowed
    }

    .form-control-static {
        min-height: 34px;
        padding-top: 7px;
        padding-bottom: 7px;
        margin-bottom: 0
    }

    .form-control-static.input-lg,
    .form-control-static.input-sm {
        padding-right: 0;
        padding-left: 0
    }

    .input-sm {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    select.input-sm {
        height: 30px;
        line-height: 30px
    }

    textarea.input-sm,
    select[multiple].input-sm {
        height: auto
    }

    .form-group-sm .form-control {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .form-group-sm select.form-control {
        height: 30px;
        line-height: 30px
    }

    .form-group-sm textarea.form-control,
    .form-group-sm select[multiple].form-control {
        height: auto
    }

    .form-group-sm .form-control-static {
        height: 30px;
        min-height: 32px;
        padding: 6px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .input-lg {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    select.input-lg {
        height: 46px;
        line-height: 46px
    }

    textarea.input-lg,
    select[multiple].input-lg {
        height: auto
    }

    .form-group-lg .form-control {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    .form-group-lg select.form-control {
        height: 46px;
        line-height: 46px
    }

    .form-group-lg textarea.form-control,
    .form-group-lg select[multiple].form-control {
        height: auto
    }

    .form-group-lg .form-control-static {
        height: 46px;
        min-height: 38px;
        padding: 11px 16px;
        font-size: 18px;
        line-height: 1.3333333
    }

    .has-feedback {
        position: relative
    }

    .has-feedback .form-control {
        padding-right: 42.5px
    }

    .form-control-feedback {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        display: block;
        width: 34px;
        height: 34px;
        line-height: 34px;
        text-align: center;
        pointer-events: none
    }

    .input-lg+.form-control-feedback,
    .input-group-lg+.form-control-feedback,
    .form-group-lg .form-control+.form-control-feedback {
        width: 46px;
        height: 46px;
        line-height: 46px
    }

    .input-sm+.form-control-feedback,
    .input-group-sm+.form-control-feedback,
    .form-group-sm .form-control+.form-control-feedback {
        width: 30px;
        height: 30px;
        line-height: 30px
    }

    .has-success .help-block,
    .has-success .control-label,
    .has-success .radio,
    .has-success .checkbox,
    .has-success .radio-inline,
    .has-success .checkbox-inline,
    .has-success.radio label,
    .has-success.checkbox label,
    .has-success.radio-inline label,
    .has-success.checkbox-inline label {
        color: #3c763d
    }

    .has-success .form-control {
        border-color: #3c763d;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-success .form-control:focus {
        border-color: #2b542c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }

    .has-success .input-group-addon {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #3c763d
    }

    .has-success .form-control-feedback {
        color: #3c763d
    }

    .has-warning .help-block,
    .has-warning .control-label,
    .has-warning .radio,
    .has-warning .checkbox,
    .has-warning .radio-inline,
    .has-warning .checkbox-inline,
    .has-warning.radio label,
    .has-warning.checkbox label,
    .has-warning.radio-inline label,
    .has-warning.checkbox-inline label {
        color: #8a6d3b
    }

    .has-warning .form-control {
        border-color: #8a6d3b;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-warning .form-control:focus {
        border-color: #66512c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }

    .has-warning .input-group-addon {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #8a6d3b
    }

    .has-warning .form-control-feedback {
        color: #8a6d3b
    }

    .has-error .help-block,
    .has-error .control-label,
    .has-error .radio,
    .has-error .checkbox,
    .has-error .radio-inline,
    .has-error .checkbox-inline,
    .has-error.radio label,
    .has-error.checkbox label,
    .has-error.radio-inline label,
    .has-error.checkbox-inline label {
        color: #a94442
    }

    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-error .form-control:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    .has-error .input-group-addon {
        color: #a94442;
        background-color: #f2dede;
        border-color: #a94442
    }

    .has-error .form-control-feedback {
        color: #a94442
    }

    .has-feedback label~.form-control-feedback {
        top: 25px
    }

    .has-feedback label.sr-only~.form-control-feedback {
        top: 0
    }

    .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #737373
    }

    @media(min-width:768px) {
        .form-inline .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .form-control-static {
            display: inline-block
        }

        .form-inline .input-group {
            display: inline-table;
            vertical-align: middle
        }

        .form-inline .input-group .input-group-addon,
        .form-inline .input-group .input-group-btn,
        .form-inline .input-group .form-control {
            width: auto
        }

        .form-inline .input-group>.form-control {
            width: 100%
        }

        .form-inline .control-label {
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .radio,
        .form-inline .checkbox {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .radio label,
        .form-inline .checkbox label {
            padding-left: 0
        }

        .form-inline .radio input[type="radio"],
        .form-inline .checkbox input[type="checkbox"] {
            position: relative;
            margin-left: 0
        }

        .form-inline .has-feedback .form-control-feedback {
            top: 0
        }
    }

    .form-horizontal .radio,
    .form-horizontal .checkbox,
    .form-horizontal .radio-inline,
    .form-horizontal .checkbox-inline {
        padding-top: 7px;
        margin-top: 0;
        margin-bottom: 0
    }

    .form-horizontal .radio,
    .form-horizontal .checkbox {
        min-height: 27px
    }

    .form-horizontal .form-group {
        margin-right: -15px;
        margin-left: -15px
    }

    @media(min-width:768px) {
        .form-horizontal .control-label {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: right
        }
    }

    .form-horizontal .has-feedback .form-control-feedback {
        right: 15px
    }

    @media(min-width:768px) {
        .form-horizontal .form-group-lg .control-label {
            padding-top: 14.333333px;
            font-size: 18px
        }
    }

    @media(min-width:768px) {
        .form-horizontal .form-group-sm .control-label {
            padding-top: 6px;
            font-size: 12px
        }
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .btn:focus,
    .btn:active:focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn.active.focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px
    }

    .btn:hover,
    .btn:focus,
    .btn.focus {
        color: #333;
        text-decoration: none
    }

    .btn:active,
    .btn.active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
        cursor: not-allowed;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: .65
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
        pointer-events: none
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default:focus,
    .btn-default.focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }

    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default:active,
    .btn-default.active,
    .open>.dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default:active:hover,
    .btn-default.active:hover,
    .open>.dropdown-toggle.btn-default:hover,
    .btn-default:active:focus,
    .btn-default.active:focus,
    .open>.dropdown-toggle.btn-default:focus,
    .btn-default:active.focus,
    .btn-default.active.focus,
    .open>.dropdown-toggle.btn-default.focus {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }

    .btn-default:active,
    .btn-default.active,
    .open>.dropdown-toggle.btn-default {
        background-image: none
    }

    .btn-default.disabled,
    .btn-default[disabled],
    fieldset[disabled] .btn-default,
    .btn-default.disabled:hover,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default:hover,
    .btn-default.disabled:focus,
    .btn-default[disabled]:focus,
    fieldset[disabled] .btn-default:focus,
    .btn-default.disabled.focus,
    .btn-default[disabled].focus,
    fieldset[disabled] .btn-default.focus,
    .btn-default.disabled:active,
    .btn-default[disabled]:active,
    fieldset[disabled] .btn-default:active,
    .btn-default.disabled.active,
    .btn-default[disabled].active,
    fieldset[disabled] .btn-default.active {
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74
    }

    .btn-primary:active:hover,
    .btn-primary.active:hover,
    .open>.dropdown-toggle.btn-primary:hover,
    .btn-primary:active:focus,
    .btn-primary.active:focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .btn-primary:active.focus,
    .btn-primary.active.focus,
    .open>.dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        background-image: none
    }

    .btn-primary.disabled,
    .btn-primary[disabled],
    fieldset[disabled] .btn-primary,
    .btn-primary.disabled:hover,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary:hover,
    .btn-primary.disabled:focus,
    .btn-primary[disabled]:focus,
    fieldset[disabled] .btn-primary:focus,
    .btn-primary.disabled.focus,
    .btn-primary[disabled].focus,
    fieldset[disabled] .btn-primary.focus,
    .btn-primary.disabled:active,
    .btn-primary[disabled]:active,
    fieldset[disabled] .btn-primary:active,
    .btn-primary.disabled.active,
    .btn-primary[disabled].active,
    fieldset[disabled] .btn-primary.active {
        background-color: #337ab7;
        border-color: #2e6da4
    }

    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c
    }

    .btn-success:focus,
    .btn-success.focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625
    }

    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }

    .btn-success:active,
    .btn-success.active,
    .open>.dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439
    }

    .btn-success:active:hover,
    .btn-success.active:hover,
    .open>.dropdown-toggle.btn-success:hover,
    .btn-success:active:focus,
    .btn-success.active:focus,
    .open>.dropdown-toggle.btn-success:focus,
    .btn-success:active.focus,
    .btn-success.active.focus,
    .open>.dropdown-toggle.btn-success.focus {
        color: #fff;
        background-color: #398439;
        border-color: #255625
    }

    .btn-success:active,
    .btn-success.active,
    .open>.dropdown-toggle.btn-success {
        background-image: none
    }

    .btn-success.disabled,
    .btn-success[disabled],
    fieldset[disabled] .btn-success,
    .btn-success.disabled:hover,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success:hover,
    .btn-success.disabled:focus,
    .btn-success[disabled]:focus,
    fieldset[disabled] .btn-success:focus,
    .btn-success.disabled.focus,
    .btn-success[disabled].focus,
    fieldset[disabled] .btn-success.focus,
    .btn-success.disabled:active,
    .btn-success[disabled]:active,
    fieldset[disabled] .btn-success:active,
    .btn-success.disabled.active,
    .btn-success[disabled].active,
    fieldset[disabled] .btn-success.active {
        background-color: #5cb85c;
        border-color: #4cae4c
    }

    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff
    }

    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info:focus,
    .btn-info.focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }

    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info:active,
    .btn-info.active,
    .open>.dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info:active:hover,
    .btn-info.active:hover,
    .open>.dropdown-toggle.btn-info:hover,
    .btn-info:active:focus,
    .btn-info.active:focus,
    .open>.dropdown-toggle.btn-info:focus,
    .btn-info:active.focus,
    .btn-info.active.focus,
    .open>.dropdown-toggle.btn-info.focus {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }

    .btn-info:active,
    .btn-info.active,
    .open>.dropdown-toggle.btn-info {
        background-image: none
    }

    .btn-info.disabled,
    .btn-info[disabled],
    fieldset[disabled] .btn-info,
    .btn-info.disabled:hover,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info:hover,
    .btn-info.disabled:focus,
    .btn-info[disabled]:focus,
    fieldset[disabled] .btn-info:focus,
    .btn-info.disabled.focus,
    .btn-info[disabled].focus,
    fieldset[disabled] .btn-info.focus,
    .btn-info.disabled:active,
    .btn-info[disabled]:active,
    fieldset[disabled] .btn-info:active,
    .btn-info.disabled.active,
    .btn-info[disabled].active,
    fieldset[disabled] .btn-info.active {
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning:focus,
    .btn-warning.focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning:active,
    .btn-warning.active,
    .open>.dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning:active:hover,
    .btn-warning.active:hover,
    .open>.dropdown-toggle.btn-warning:hover,
    .btn-warning:active:focus,
    .btn-warning.active:focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .btn-warning:active.focus,
    .btn-warning.active.focus,
    .open>.dropdown-toggle.btn-warning.focus {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }

    .btn-warning:active,
    .btn-warning.active,
    .open>.dropdown-toggle.btn-warning {
        background-image: none
    }

    .btn-warning.disabled,
    .btn-warning[disabled],
    fieldset[disabled] .btn-warning,
    .btn-warning.disabled:hover,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning:hover,
    .btn-warning.disabled:focus,
    .btn-warning[disabled]:focus,
    fieldset[disabled] .btn-warning:focus,
    .btn-warning.disabled.focus,
    .btn-warning[disabled].focus,
    fieldset[disabled] .btn-warning.focus,
    .btn-warning.disabled:active,
    .btn-warning[disabled]:active,
    fieldset[disabled] .btn-warning:active,
    .btn-warning.disabled.active,
    .btn-warning[disabled].active,
    fieldset[disabled] .btn-warning.active {
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger:focus,
    .btn-danger.focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger:active,
    .btn-danger.active,
    .open>.dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger:active:hover,
    .btn-danger.active:hover,
    .open>.dropdown-toggle.btn-danger:hover,
    .btn-danger:active:focus,
    .btn-danger.active:focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .btn-danger:active.focus,
    .btn-danger.active.focus,
    .open>.dropdown-toggle.btn-danger.focus {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }

    .btn-danger:active,
    .btn-danger.active,
    .open>.dropdown-toggle.btn-danger {
        background-image: none
    }

    .btn-danger.disabled,
    .btn-danger[disabled],
    fieldset[disabled] .btn-danger,
    .btn-danger.disabled:hover,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger:hover,
    .btn-danger.disabled:focus,
    .btn-danger[disabled]:focus,
    fieldset[disabled] .btn-danger:focus,
    .btn-danger.disabled.focus,
    .btn-danger[disabled].focus,
    fieldset[disabled] .btn-danger.focus,
    .btn-danger.disabled:active,
    .btn-danger[disabled]:active,
    fieldset[disabled] .btn-danger:active,
    .btn-danger.disabled.active,
    .btn-danger[disabled].active,
    fieldset[disabled] .btn-danger.active {
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }

    .btn-link {
        font-weight: normal;
        color: #337ab7;
        border-radius: 0
    }

    .btn-link,
    .btn-link:active,
    .btn-link.active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-link,
    .btn-link:hover,
    .btn-link:focus,
    .btn-link:active {
        border-color: transparent
    }

    .btn-link:hover,
    .btn-link:focus {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:hover,
    .btn-link[disabled]:focus,
    fieldset[disabled] .btn-link:focus {
        color: #777;
        text-decoration: none
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-xs,
    .btn-group-xs>.btn {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: 5px
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%
    }

    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    .fade.in {
        opacity: 1
    }

    .collapse {
        display: none
    }

    .collapse.in {
        display: block
    }

    tr.collapse.in {
        display: table-row
    }

    tbody.collapse.in {
        display: table-row-group
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        -webkit-transition-duration: .35s;
        -o-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-property: height, visibility;
        -o-transition-property: height, visibility;
        transition-property: height, visibility
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid \9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }

    .dropup,
    .dropdown {
        position: relative
    }

    .dropdown-toggle:focus {
        outline: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
    }

    .dropdown-menu.pull-right {
        right: 0;
        left: auto
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .dropdown-menu>li>a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap
    }

    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
        color: #fff;
        text-decoration: none;
        background-color: #337ab7;
        outline: 0
    }

    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:hover,
    .dropdown-menu>.disabled>a:focus {
        color: #777
    }

    .dropdown-menu>.disabled>a:hover,
    .dropdown-menu>.disabled>a:focus {
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent;
        background-image: none;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
    }

    .open>.dropdown-menu {
        display: block
    }

    .open>a {
        outline: 0
    }

    .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .dropdown-menu-left {
        right: auto;
        left: 0
    }

    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
    }

    .dropdown-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 990
    }

    .pull-right>.dropdown-menu {
        right: 0;
        left: auto
    }

    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
        content: "";
        border-top: 0;
        border-bottom: 4px dashed;
        border-bottom: 4px solid \9
    }

    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }

    @media(min-width:768px) {
        .navbar-right .dropdown-menu {
            right: 0;
            left: auto
        }

        .navbar-right .dropdown-menu-left {
            right: auto;
            left: 0
        }
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
        position: relative;
        float: left
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn:focus,
    .btn-group-vertical>.btn:focus,
    .btn-group>.btn:active,
    .btn-group-vertical>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn.active {
        z-index: 2
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
        margin-left: -1px
    }

    .btn-toolbar {
        margin-left: -5px
    }

    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group {
        float: left
    }

    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
        margin-left: 5px
    }

    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }

    .btn-group>.btn:first-child {
        margin-left: 0
    }

    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group>.btn-group {
        float: left
    }

    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }

    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
        outline: 0
    }

    .btn-group>.btn+.dropdown-toggle {
        padding-right: 8px;
        padding-left: 8px
    }

    .btn-group>.btn-lg+.dropdown-toggle {
        padding-right: 12px;
        padding-left: 12px
    }

    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn .caret {
        margin-left: 0
    }

    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0
    }

    .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }

    .btn-group-vertical>.btn-group>.btn {
        float: none
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
        margin-top: -1px;
        margin-left: 0
    }

    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }

    .btn-group-vertical>.btn:first-child:not(:last-child) {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn:last-child:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 4px
    }

    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }

    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }

    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
        display: table-cell;
        float: none;
        width: 1%
    }

    .btn-group-justified>.btn-group .btn {
        width: 100%
    }

    .btn-group-justified>.btn-group .dropdown-menu {
        left: auto
    }

    [data-toggle="buttons"]>.btn input[type="radio"],
    [data-toggle="buttons"]>.btn-group>.btn input[type="radio"],
    [data-toggle="buttons"]>.btn input[type="checkbox"],
    [data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate
    }

    .input-group[class*="col-"] {
        float: none;
        padding-right: 0;
        padding-left: 0
    }

    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }

    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px
    }

    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
        height: 46px;
        line-height: 46px
    }

    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn,
    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn {
        height: auto
    }

    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
        height: 30px;
        line-height: 30px
    }

    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn,
    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn {
        height: auto
    }

    .input-group-addon,
    .input-group-btn,
    .input-group .form-control {
        display: table-cell
    }

    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child),
    .input-group .form-control:not(:first-child):not(:last-child) {
        border-radius: 0
    }

    .input-group-addon,
    .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle
    }

    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: normal;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    .input-group-addon.input-sm {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px
    }

    .input-group-addon.input-lg {
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px
    }

    .input-group-addon input[type="radio"],
    .input-group-addon input[type="checkbox"] {
        margin-top: 0
    }

    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group-addon:first-child {
        border-right: 0
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group-addon:last-child {
        border-left: 0
    }

    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap
    }

    .input-group-btn>.btn {
        position: relative
    }

    .input-group-btn>.btn+.btn {
        margin-left: -1px
    }

    .input-group-btn>.btn:hover,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:active {
        z-index: 2
    }

    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
        margin-right: -1px
    }

    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
        z-index: 2;
        margin-left: -1px
    }



    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:hover,
    .navbar-inverse .btn-link[disabled]:focus,
    fieldset[disabled] .navbar-inverse .btn-link:focus {
        color: #444
    }

    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px
    }

    .breadcrumb>li {
        display: inline-block
    }

    .breadcrumb>li+li:before {
        padding: 0 5px;
        color: #ccc;
        content: "/ "
    }

    .breadcrumb>.active {
        color: #777
    }

    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px
    }

    .pagination>li {
        display: inline
    }

    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }

    .pagination>li:last-child>a,
    .pagination>li:last-child>span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus {
        z-index: 3;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd
    }

    .pagination>.active>a,
    .pagination>.active>span,
    .pagination>.active>a:hover,
    .pagination>.active>span:hover,
    .pagination>.active>a:focus,
    .pagination>.active>span:focus {
        z-index: 2;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7
    }

    .pagination>.disabled>span,
    .pagination>.disabled>span:hover,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>a,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>a:focus {
        color: #777;
        cursor: not-allowed;
        background-color: #fff;
        border-color: #ddd
    }

    .pagination-lg>li>a,
    .pagination-lg>li>span {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px
    }

    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px
    }

    .pagination-sm>li>a,
    .pagination-sm>li>span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px
    }

    .pager {
        padding-left: 0;
        margin: 20px 0;
        text-align: center;
        list-style: none
    }

    .pager li {
        display: inline
    }

    .pager li>a,
    .pager li>span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px
    }

    .pager li>a:hover,
    .pager li>a:focus {
        text-decoration: none;
        background-color: #eee
    }

    .pager .next>a,
    .pager .next>span {
        float: right
    }

    .pager .previous>a,
    .pager .previous>span {
        float: left
    }

    .pager .disabled>a,
    .pager .disabled>a:hover,
    .pager .disabled>a:focus,
    .pager .disabled>span {
        color: #777;
        cursor: not-allowed;
        background-color: #fff
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em
    }

    a.label:hover,
    a.label:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .label:empty {
        display: none
    }

    .btn .label {
        position: relative;
        top: -1px
    }

    .label-default {
        background-color: #777
    }

    .label-default[href]:hover,
    .label-default[href]:focus {
        background-color: #5e5e5e
    }

    .label-primary {
        background-color: #337ab7
    }

    .label-primary[href]:hover,
    .label-primary[href]:focus {
        background-color: #286090
    }

    .label-success {
        background-color: #5cb85c
    }

    .label-success[href]:hover,
    .label-success[href]:focus {
        background-color: #449d44
    }

    .label-info {
        background-color: #5bc0de
    }

    .label-info[href]:hover,
    .label-info[href]:focus {
        background-color: #31b0d5
    }

    .label-warning {
        background-color: #f0ad4e
    }

    .label-warning[href]:hover,
    .label-warning[href]:focus {
        background-color: #ec971f
    }

    .label-danger {
        background-color: #d9534f
    }

    .label-danger[href]:hover,
    .label-danger[href]:focus {
        background-color: #c9302c
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        position: relative;
        top: -1px
    }

    .btn-xs .badge,
    .btn-group-xs>.btn .badge {
        top: 0;
        padding: 1px 5px
    }

    a.badge:hover,
    a.badge:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer
    }

    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
        color: #337ab7;
        background-color: #fff
    }

    .list-group-item>.badge {
        float: right
    }

    .list-group-item>.badge+.badge {
        margin-right: 5px
    }

    .nav-pills>li>a>.badge {
        margin-left: 3px
    }

    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        color: inherit;
        background-color: #eee
    }

    .jumbotron h1,
    .jumbotron .h1 {
        color: inherit
    }

    .jumbotron p {
        margin-bottom: 15px;
        font-size: 21px;
        font-weight: 200
    }

    .jumbotron>hr {
        border-top-color: #d5d5d5
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
        border-radius: 6px
    }

    .jumbotron .container {
        max-width: 100%
    }

    @media screen and (min-width:768px) {
        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-right: 60px;
            padding-left: 60px
        }

        .jumbotron h1,
        .jumbotron .h1 {
            font-size: 63px
        }
    }

    .thumbnail {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }

    .thumbnail>img,
    .thumbnail a>img {
        margin-right: auto;
        margin-left: auto
    }

    a.thumbnail:hover,
    a.thumbnail:focus,
    a.thumbnail.active {
        border-color: #337ab7
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .alert h4 {
        margin-top: 0;
        color: inherit
    }

    .alert .alert-link {
        font-weight: bold
    }

    .alert>p,
    .alert>ul {
        margin-bottom: 0
    }

    .alert>p+p {
        margin-top: 5px
    }

    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }

    .alert-success hr {
        border-top-color: #c9e2b3
    }

    .alert-success .alert-link {
        color: #2b542c
    }

    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }

    .alert-info hr {
        border-top-color: #a6e1ec
    }

    .alert-info .alert-link {
        color: #245269
    }

    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }

    .alert-warning hr {
        border-top-color: #f7e1b5
    }

    .alert-warning .alert-link {
        color: #66512c
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }

    .alert-danger hr {
        border-top-color: #e4b9c0
    }

    .alert-danger .alert-link {
        color: #843534
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }

        to {
            background-position: 0 0
        }
    }

    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }

        to {
            background-position: 0 0
        }
    }

    .progress {
        height: 20px;
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #f5f5f5;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
    }

    .progress-bar {
        float: left;
        width: 0;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #fff;
        text-align: center;
        background-color: #337ab7;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease
    }

    .progress-striped .progress-bar,
    .progress-bar-striped {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px
    }

    .progress.active .progress-bar,
    .progress-bar.active {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite
    }

    .progress-bar-success {
        background-color: #5cb85c
    }

    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-info {
        background-color: #5bc0de
    }

    .progress-striped .progress-bar-info {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-warning {
        background-color: #f0ad4e
    }

    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-danger {
        background-color: #d9534f
    }

    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .media {
        margin-top: 15px
    }

    .media:first-child {
        margin-top: 0
    }

    .media,
    .media-body {
        overflow: hidden;
        zoom: 1
    }

    .media-body {
        width: 10000px
    }

    .media-object {
        display: block
    }

    .media-object.img-thumbnail {
        max-width: none
    }

    .media-right,
    .media>.pull-right {
        padding-left: 10px
    }

    .media-left,
    .media>.pull-left {
        padding-right: 10px
    }

    .media-left,
    .media-right,
    .media-body {
        display: table-cell;
        vertical-align: top
    }

    .media-middle {
        vertical-align: middle
    }

    .media-bottom {
        vertical-align: bottom
    }

    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .media-list {
        padding-left: 0;
        list-style: none
    }

    .list-group {
        padding-left: 0;
        margin-bottom: 20px
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }

    a.list-group-item,
    button.list-group-item {
        color: #555
    }

    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
        color: #333
    }

    a.list-group-item:hover,
    button.list-group-item:hover,
    a.list-group-item:focus,
    button.list-group-item:focus {
        color: #555;
        text-decoration: none;
        background-color: #f5f5f5
    }

    button.list-group-item {
        width: 100%;
        text-align: left
    }

    .list-group-item.disabled,
    .list-group-item.disabled:hover,
    .list-group-item.disabled:focus {
        color: #777;
        cursor: not-allowed;
        background-color: #eee
    }

    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading {
        color: inherit
    }

    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text {
        color: #777
    }

    .list-group-item.active,
    .list-group-item.active:hover,
    .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }

    .list-group-item.active .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>.small {
        color: inherit
    }

    .list-group-item.active .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text {
        color: #c7ddef
    }

    .list-group-item-success {
        color: #3c763d;
        background-color: #dff0d8
    }

    a.list-group-item-success,
    button.list-group-item-success {
        color: #3c763d
    }

    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-success:hover,
    button.list-group-item-success:hover,
    a.list-group-item-success:focus,
    button.list-group-item-success:focus {
        color: #3c763d;
        background-color: #d0e9c6
    }

    a.list-group-item-success.active,
    button.list-group-item-success.active,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active:hover,
    a.list-group-item-success.active:focus,
    button.list-group-item-success.active:focus {
        color: #fff;
        background-color: #3c763d;
        border-color: #3c763d
    }

    .list-group-item-info {
        color: #31708f;
        background-color: #d9edf7
    }

    a.list-group-item-info,
    button.list-group-item-info {
        color: #31708f
    }

    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-info:hover,
    button.list-group-item-info:hover,
    a.list-group-item-info:focus,
    button.list-group-item-info:focus {
        color: #31708f;
        background-color: #c4e3f3
    }

    a.list-group-item-info.active,
    button.list-group-item-info.active,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active:hover,
    a.list-group-item-info.active:focus,
    button.list-group-item-info.active:focus {
        color: #fff;
        background-color: #31708f;
        border-color: #31708f
    }

    .list-group-item-warning {
        color: #8a6d3b;
        background-color: #fcf8e3
    }

    a.list-group-item-warning,
    button.list-group-item-warning {
        color: #8a6d3b
    }

    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-warning:hover,
    button.list-group-item-warning:hover,
    a.list-group-item-warning:focus,
    button.list-group-item-warning:focus {
        color: #8a6d3b;
        background-color: #faf2cc
    }

    a.list-group-item-warning.active,
    button.list-group-item-warning.active,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active:hover,
    a.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:focus {
        color: #fff;
        background-color: #8a6d3b;
        border-color: #8a6d3b
    }

    .list-group-item-danger {
        color: #a94442;
        background-color: #f2dede
    }

    a.list-group-item-danger,
    button.list-group-item-danger {
        color: #a94442
    }

    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-danger:hover,
    button.list-group-item-danger:hover,
    a.list-group-item-danger:focus,
    button.list-group-item-danger:focus {
        color: #a94442;
        background-color: #ebcccc
    }

    a.list-group-item-danger.active,
    button.list-group-item-danger.active,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active:hover,
    a.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:focus {
        color: #fff;
        background-color: #a94442;
        border-color: #a94442
    }

    .list-group-item-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .list-group-item-text {
        margin-bottom: 0;
        line-height: 1.3
    }

    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
    }

    .panel-body {
        padding: 15px
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }

    .panel-heading>.dropdown .dropdown-toggle {
        color: inherit
    }

    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit
    }

    .panel-title>a,
    .panel-title>small,
    .panel-title>.small,
    .panel-title>small>a,
    .panel-title>.small>a {
        color: inherit
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.list-group,
    .panel>.panel-collapse>.list-group {
        margin-bottom: 0
    }

    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0
    }

    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }

    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .panel-heading+.list-group .list-group-item:first-child {
        border-top-width: 0
    }

    .list-group+.panel-footer {
        border-top-width: 0
    }

    .panel>.table,
    .panel>.table-responsive>.table,
    .panel>.panel-collapse>.table {
        margin-bottom: 0
    }

    .panel>.table caption,
    .panel>.table-responsive>.table caption,
    .panel>.panel-collapse>.table caption {
        padding-right: 15px;
        padding-left: 15px
    }

    .panel>.table:first-child,
    .panel>.table-responsive:first-child>.table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }

    .panel>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
        border-top-left-radius: 3px
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
        border-top-right-radius: 3px
    }

    .panel>.table:last-child,
    .panel>.table-responsive:last-child>.table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
        border-bottom-left-radius: 3px
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
        border-bottom-right-radius: 3px
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
        border-top: 1px solid #ddd
    }

    .panel>.table>tbody:first-child>tr:first-child th,
    .panel>.table>tbody:first-child>tr:first-child td {
        border-top: 0
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
        border: 0
    }

    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
        border-left: 0
    }

    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
        border-right: 0
    }

    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
        border-bottom: 0
    }

    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0
    }

    .panel>.table-responsive {
        margin-bottom: 0;
        border: 0
    }

    .panel-group {
        margin-bottom: 20px
    }

    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px
    }

    .panel-group .panel+.panel {
        margin-top: 5px
    }

    .panel-group .panel-heading {
        border-bottom: 0
    }

    .panel-group .panel-heading+.panel-collapse>.panel-body,
    .panel-group .panel-heading+.panel-collapse>.list-group {
        border-top: 1px solid #ddd
    }

    .panel-group .panel-footer {
        border-top: 0
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
        border-bottom: 1px solid #ddd
    }

    .panel-default {
        border-color: #ddd
    }

    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ddd
    }

    .panel-default>.panel-heading .badge {
        color: #f5f5f5;
        background-color: #333
    }

    .panel-default>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ddd
    }

    .panel-primary {
        border-color: #337ab7
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7
    }

    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #337ab7
    }

    .panel-primary>.panel-heading .badge {
        color: #337ab7;
        background-color: #fff
    }

    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #337ab7
    }

    .panel-success {
        border-color: #d6e9c6
    }

    .panel-success>.panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }

    .panel-success>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #d6e9c6
    }

    .panel-success>.panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d
    }

    .panel-success>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #d6e9c6
    }

    .panel-info {
        border-color: #bce8f1
    }

    .panel-info>.panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }

    .panel-info>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #bce8f1
    }

    .panel-info>.panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f
    }

    .panel-info>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #bce8f1
    }

    .panel-warning {
        border-color: #faebcc
    }

    .panel-warning>.panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }

    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #faebcc
    }

    .panel-warning>.panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b
    }

    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #faebcc
    }

    .panel-danger {
        border-color: #ebccd1
    }

    .panel-danger>.panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }

    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ebccd1
    }

    .panel-danger>.panel-heading .badge {
        color: #f2dede;
        background-color: #a94442
    }

    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ebccd1
    }

    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0;
        overflow: hidden
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%
    }

    .embed-responsive-4by3 {
        padding-bottom: 75%
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15)
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px
    }

    .close {
        float: right;
        font-size: 21px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: .5
    }

    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0
    }

    .modal-open {
        overflow: hidden
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }

    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        /* z-index: 1040; */
        /* background-color: #000 */
    }

    .modal-backdrop.fade {
        filter: alpha(opacity=0);
        opacity: 0
    }

    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .5
    }

    .modal-header {
        min-height: 16.42857143px;
        padding: 15px;
        border-bottom: 1px solid #e5e5e5
    }

    .modal-header .close {
        margin-top: -2px
    }

    .modal-title {
        margin: 0;
        line-height: 1.42857143
    }

    .modal-body {
        position: relative;
        padding: 15px
    }

    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn+.btn {
        margin-bottom: 0;
        margin-left: 5px
    }

    .modal-footer .btn-group .btn+.btn {
        margin-left: -1px
    }

    .modal-footer .btn-block+.btn-block {
        margin-left: 0
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media(min-width:768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }

        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }

        .modal-sm {
            width: 300px
        }
    }

    @media(min-width:992px) {
        .modal-lg {
            width: 900px
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        filter: alpha(opacity=0);
        opacity: 0;
        line-break: auto
    }

    .tooltip.in {
        filter: alpha(opacity=90);
        opacity: .9
    }

    .tooltip.top {
        padding: 5px 0;
        margin-top: -3px
    }

    .tooltip.right {
        padding: 0 5px;
        margin-left: 3px
    }

    .tooltip.bottom {
        padding: 5px 0;
        margin-top: 3px
    }

    .tooltip.left {
        padding: 0 5px;
        margin-left: -3px
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px
    }

    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.top-left .tooltip-arrow {
        right: 5px;
        bottom: 0;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        left: 5px;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }

    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }

    .tooltip.bottom .tooltip-arrow {
        top: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }

    .tooltip.bottom-left .tooltip-arrow {
        top: 0;
        right: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }

    .tooltip.bottom-right .tooltip-arrow {
        top: 0;
        left: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: none;
        max-width: 276px;
        padding: 1px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        line-break: auto
    }

    .popover.top {
        margin-top: -10px
    }

    .popover.right {
        margin-left: 10px
    }

    .popover.bottom {
        margin-top: 10px
    }

    .popover.left {
        margin-left: -10px
    }

    .popover-title {
        padding: 8px 14px;
        margin: 0;
        font-size: 14px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-radius: 5px 5px 0 0
    }

    .popover-content {
        padding: 9px 14px
    }

    .popover>.arrow,
    .popover>.arrow:after {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .popover>.arrow {
        border-width: 11px
    }

    .popover>.arrow:after {
        content: "";
        border-width: 10px
    }

    .popover.top>.arrow {
        bottom: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-color: #999;
        border-top-color: rgba(0, 0, 0, .25);
        border-bottom-width: 0
    }

    .popover.top>.arrow:after {
        bottom: 1px;
        margin-left: -10px;
        content: " ";
        border-top-color: #fff;
        border-bottom-width: 0
    }

    .popover.right>.arrow {
        top: 50%;
        left: -11px;
        margin-top: -11px;
        border-right-color: #999;
        border-right-color: rgba(0, 0, 0, .25);
        border-left-width: 0
    }

    .popover.right>.arrow:after {
        bottom: -10px;
        left: 1px;
        content: " ";
        border-right-color: #fff;
        border-left-width: 0
    }

    .popover.bottom>.arrow {
        top: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-width: 0;
        border-bottom-color: #999;
        border-bottom-color: rgba(0, 0, 0, .25)
    }

    .popover.bottom>.arrow:after {
        top: 1px;
        margin-left: -10px;
        content: " ";
        border-top-width: 0;
        border-bottom-color: #fff
    }

    .popover.left>.arrow {
        top: 50%;
        right: -11px;
        margin-top: -11px;
        border-right-width: 0;
        border-left-color: #999;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.left>.arrow:after {
        right: 1px;
        bottom: -10px;
        content: " ";
        border-right-width: 0;
        border-left-color: #fff
    }

    .carousel {
        position: relative
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .carousel-inner>.item {
        position: relative;
        display: none;
        -webkit-transition: .6s ease-in-out left;
        -o-transition: .6s ease-in-out left;
        transition: .6s ease-in-out left
    }

    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        line-height: 1
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {
        .carousel-inner>.item {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            -o-transition: -o-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }

        .carousel-inner>.item.next,
        .carousel-inner>.item.active.right {
            left: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        .carousel-inner>.item.prev,
        .carousel-inner>.item.active.left {
            left: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        .carousel-inner>.item.next.left,
        .carousel-inner>.item.prev.right,
        .carousel-inner>.item.active {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
        display: block
    }

    .carousel-inner>.active {
        left: 0
    }

    .carousel-inner>.next,
    .carousel-inner>.prev {
        position: absolute;
        top: 0;
        width: 100%
    }

    .carousel-inner>.next {
        left: 100%
    }

    .carousel-inner>.prev {
        left: -100%
    }

    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
        left: 0
    }

    .carousel-inner>.active.left {
        left: -100%
    }

    .carousel-inner>.active.right {
        left: 100%
    }

    .carousel-control {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
        filter: alpha(opacity=50);
        opacity: .5
    }

    .carousel-control.left {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        background-repeat: repeat-x
    }

    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
        background-repeat: repeat-x
    }

    .carousel-control:hover,
    .carousel-control:focus {
        color: #fff;
        text-decoration: none;
        filter: alpha(opacity=90);
        outline: 0;
        opacity: .9
    }

    .carousel-control .icon-prev,
    .carousel-control .icon-next,
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -10px
    }

    .carousel-control .icon-prev,
    .carousel-control .glyphicon-chevron-left {
        left: 50%;
        margin-left: -10px
    }

    .carousel-control .icon-next,
    .carousel-control .glyphicon-chevron-right {
        right: 50%;
        margin-right: -10px
    }

    .carousel-control .icon-prev,
    .carousel-control .icon-next {
        width: 20px;
        height: 20px;
        font-family: serif;
        line-height: 1
    }

    .carousel-control .icon-prev:before {
        content: '‹'
    }

    .carousel-control .icon-next:before {
        content: '›'
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000 \9;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff;
        border-radius: 10px
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .carousel-caption .btn {
        text-shadow: none
    }

    @media screen and (min-width:768px) {

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            width: 30px;
            height: 30px;
            margin-top: -15px;
            font-size: 30px
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            margin-left: -15px
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            margin-right: -15px
        }

        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 30px
        }

        .carousel-indicators {
            bottom: 20px
        }
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-footer:before,
    .modal-footer:after {
        display: table;
        content: " "
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-footer:after {
        clear: both
    }

    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .hidden {
        display: none !important
    }

    .affix {
        position: fixed
    }

    @-ms-viewport {
        width: device-width;
    }

    .visible-xs,
    .visible-sm,
    .visible-md,
    .visible-lg {
        display: none !important
    }

    .visible-xs-block,
    .visible-xs-inline,
    .visible-xs-inline-block,
    .visible-sm-block,
    .visible-sm-inline,
    .visible-sm-inline-block,
    .visible-md-block,
    .visible-md-inline,
    .visible-md-inline-block,
    .visible-lg-block,
    .visible-lg-inline,
    .visible-lg-inline-block {
        display: none !important
    }

    @media(max-width:767px) {
        .visible-xs {
            display: block !important
        }

        table.visible-xs {
            display: table !important
        }

        tr.visible-xs {
            display: table-row !important
        }

        th.visible-xs,
        td.visible-xs {
            display: table-cell !important
        }
    }

    @media(max-width:767px) {
        .visible-xs-block {
            display: block !important
        }
    }

    @media(max-width:767px) {
        .visible-xs-inline {
            display: inline !important
        }
    }

    @media(max-width:767px) {
        .visible-xs-inline-block {
            display: inline-block !important
        }
    }

    @media(min-width:768px)and (max-width:991px) {
        .visible-sm {
            display: block !important
        }

        table.visible-sm {
            display: table !important
        }

        tr.visible-sm {
            display: table-row !important
        }

        th.visible-sm,
        td.visible-sm {
            display: table-cell !important
        }
    }

    @media(min-width:768px)and (max-width:991px) {
        .visible-sm-block {
            display: block !important
        }
    }

    @media(min-width:768px)and (max-width:991px) {
        .visible-sm-inline {
            display: inline !important
        }
    }

    @media(min-width:768px)and (max-width:991px) {
        .visible-sm-inline-block {
            display: inline-block !important
        }
    }

    @media(min-width:992px)and (max-width:1199px) {
        .visible-md {
            display: block !important
        }

        table.visible-md {
            display: table !important
        }

        tr.visible-md {
            display: table-row !important
        }

        th.visible-md,
        td.visible-md {
            display: table-cell !important
        }
    }

    @media(min-width:992px)and (max-width:1199px) {
        .visible-md-block {
            display: block !important
        }
    }

    @media(min-width:992px)and (max-width:1199px) {
        .visible-md-inline {
            display: inline !important
        }
    }

    @media(min-width:992px)and (max-width:1199px) {
        .visible-md-inline-block {
            display: inline-block !important
        }
    }

    @media(min-width:1200px) {
        .visible-lg {
            display: block !important
        }

        table.visible-lg {
            display: table !important
        }

        tr.visible-lg {
            display: table-row !important
        }

        th.visible-lg,
        td.visible-lg {
            display: table-cell !important
        }
    }

    @media(min-width:1200px) {
        .visible-lg-block {
            display: block !important
        }
    }

    @media(min-width:1200px) {
        .visible-lg-inline {
            display: inline !important
        }
    }

    @media(min-width:1200px) {
        .visible-lg-inline-block {
            display: inline-block !important
        }
    }

    @media(max-width:767px) {
        .hidden-xs {
            display: none !important
        }
    }

    @media(min-width:768px)and (max-width:991px) {
        .hidden-sm {
            display: none !important
        }
    }

    @media(min-width:992px)and (max-width:1199px) {
        .hidden-md {
            display: none !important
        }
    }

    @media(min-width:1200px) {
        .hidden-lg {
            display: none !important
        }
    }

    .visible-print {
        display: none !important
    }

    @media print {
        .visible-print {
            display: block !important
        }

        table.visible-print {
            display: table !important
        }

        tr.visible-print {
            display: table-row !important
        }

        th.visible-print,
        td.visible-print {
            display: table-cell !important
        }
    }

    .visible-print-block {
        display: none !important
    }

    @media print {
        .visible-print-block {
            display: block !important
        }
    }

    .visible-print-inline {
        display: none !important
    }

    @media print {
        .visible-print-inline {
            display: inline !important
        }
    }

    .visible-print-inline-block {
        display: none !important
    }

    @media print {
        .visible-print-inline-block {
            display: inline-block !important
        }
    }

    @media print {
        .hidden-print {
            display: none !important
        }
    }

    html,
    body {
        min-height: 100%
    }

    .layout-boxed html,
    .layout-boxed body {
        height: 100%
    }

    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 400;
        overflow-x: hidden;
        overflow-y: auto
    }

    .wrapper {
        min-height: 100%;
        position: static;
        overflow: hidden
    }

    .wrapper:before,
    .wrapper:after {
        content: " ";
        display: table
    }

    .wrapper:after {
        clear: both
    }

    .layout-boxed .wrapper {
        max-width: 1250px;
        margin: 0 auto;
        min-height: 100%;
        box-shadow: 0 0 8px rgba(0, 0, 0, .5);
        position: relative
    }

    .layout-boxed {
        background: url(/du-lich/content/img/boxed-bg.jpg) repeat fixed
    }

    .content-wrapper,
    .right-side,
    .main-footer {
        -webkit-transition: -webkit-transform .15s ease-in-out, margin .15s ease-in-out;
        -moz-transition: -moz-transform .15s ease-in-out, margin .15s ease-in-out;
        -o-transition: -o-transform .15s ease-in-out, margin .15s ease-in-out;
        transition: transform .15s ease-in-out, margin .15s ease-in-out;
        margin-left: 300px;
        z-index: 820
    }

    .layout-top-nav .content-wrapper,
    .layout-top-nav .right-side,
    .layout-top-nav .main-footer {
        margin-left: 0
    }

    @media(max-width:767px) {

        .content-wrapper,
        .right-side,
        .main-footer {
            margin-left: 0
        }
    }

    @media(min-width:768px) {

        .sidebar-collapse .content-wrapper,
        .sidebar-collapse .right-side,
        .sidebar-collapse .main-footer {
            margin-left: 0
        }
    }

    @media(max-width:767px) {

        .sidebar-open .content-wrapper,
        .sidebar-open .right-side,
        .sidebar-open .main-footer {
            -webkit-transform: translate(300px, 0);
            -ms-transform: translate(300px, 0);
            -o-transform: translate(300px, 0);
            transform: translate(300px, 0)
        }
    }

    .content-wrapper,
    .right-side {
        min-height: 100%;
        background-color: #ecf0f5;
        z-index: 800
    }

    .main-footer {
        background: #fff;
        padding: 15px;
        color: #444;
        border-top: 1px solid #d2d6de
    }

    .fixed .main-header,
    .fixed .main-sidebar,
    .fixed .left-side {
        position: fixed
    }

    .fixed .main-header {
        top: 0;
        right: 0;
        left: 0
    }

    .fixed .content-wrapper,
    .fixed .right-side {
        padding-top: 50px
    }

    @media(max-width:767px) {

        .fixed .content-wrapper,
        .fixed .right-side {
            padding-top: 100px
        }
    }

    .fixed.layout-boxed .wrapper {
        max-width: 100%
    }

    body.hold-transition .content-wrapper,
    body.hold-transition .right-side,
    body.hold-transition .main-footer,
    body.hold-transition .main-sidebar,
    body.hold-transition .left-side,
    body.hold-transition .main-header>.navbar,
    body.hold-transition .main-header .logo {
        -webkit-transition: none;
        -o-transition: none;
        transition: none
    }

    .content {
        min-height: 250px;
        padding: 15px;
        margin-right: auto;
        margin-left: auto;
        padding-left: 15px;
        padding-right: 15px
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
        font-family: Helvetica, Arial, sans-serif
    }

    a {
        color: #2196f3
    }

    a:hover,
    a:active,
    a:focus {
        outline: none;
        text-decoration: none;
        color: #6ab8f7
    }

    .page-header {
        margin: 10px 0 20px 0;
        font-size: 22px
    }

    .page-header>small {
        color: #666;
        display: block;
        margin-top: 5px
    }

    .main-header {
        position: relative;
        max-height: 100px;
        z-index: 1030
    }

    .main-header>.navbar {
        -webkit-transition: margin-left .15s ease-in-out;
        -o-transition: margin-left .15s ease-in-out;
        transition: margin-left .15s ease-in-out;
        margin-bottom: 0;
        margin-left: 300px;
        border: none;
        min-height: 50px;
        border-radius: 0
    }

    .layout-top-nav .main-header>.navbar {
        margin-left: 0
    }

    .main-header #navbar-search-input.form-control {
        background: rgba(255, 255, 255, .2);
        border-color: transparent
    }

    .main-header #navbar-search-input.form-control:focus,
    .main-header #navbar-search-input.form-control:active {
        border-color: rgba(0, 0, 0, .1);
        background: rgba(255, 255, 255, .9)
    }

    .main-header #navbar-search-input.form-control::-moz-placeholder {
        color: #ccc;
        opacity: 1
    }

    .main-header #navbar-search-input.form-control:-ms-input-placeholder {
        color: #ccc
    }

    .main-header #navbar-search-input.form-control::-webkit-input-placeholder {
        color: #ccc
    }

    .main-header .navbar-custom-menu,
    .main-header .navbar-right {
        float: right
    }

    @media(max-width:991px) {

        .main-header .navbar-custom-menu a,
        .main-header .navbar-right a {
            color: inherit;
            background: transparent
        }
    }

    @media(max-width:767px) {
        .main-header .navbar-right {
            float: none
        }

        .navbar-collapse .main-header .navbar-right {
            margin: 7.5px -15px
        }

        .main-header .navbar-right>li {
            color: inherit;
            border: 0
        }
    }

    .main-header .sidebar-toggle {
        float: left;
        background-color: transparent;
        background-image: none;
        padding: 15px 15px;
        font-family: fontAwesome
    }

    .main-header .sidebar-toggle:before {
        content: ""
    }

    .main-header .sidebar-toggle:hover {
        color: #fff
    }

    .main-header .sidebar-toggle:focus,
    .main-header .sidebar-toggle:active {
        background: transparent
    }

    .main-header .sidebar-toggle .icon-bar {
        display: none
    }

    .main-header .navbar .nav>li.user>a>.fa,
    .main-header .navbar .nav>li.user>a>.glyphicon,
    .main-header .navbar .nav>li.user>a>.ion {
        margin-right: 5px
    }

    .main-header .navbar .nav>li>a>.label {
        position: absolute;
        top: 9px;
        right: 7px;
        text-align: center;
        font-size: 9px;
        padding: 2px 3px;
        line-height: .9
    }

    .main-header .logo {
        -webkit-transition: width .15s ease-in-out;
        -o-transition: width .15s ease-in-out;
        transition: width .15s ease-in-out;
        display: block;
        float: left;
        height: 50px;
        font-size: 20px;
        line-height: 50px;
        text-align: center;
        width: 300px;
        font-family: Helvetica, Arial, sans-serif;
        padding: 0 15px;
        font-weight: 300;
        overflow: hidden
    }

    .main-header .logo .logo-lg {
        display: block
    }

    .main-header .logo .logo-mini {
        display: none
    }

    .main-header .navbar-brand {
        color: #fff
    }

    .content-header {
        position: relative;
        padding: 15px 15px 0 15px
    }

    .content-header>h1 {
        margin: 0;
        font-size: 24px
    }

    .content-header>h1>small {
        font-size: 15px;
        display: inline-block;
        padding-left: 4px;
        font-weight: 300
    }

    .content-header>.breadcrumb {
        float: right;
        background: transparent;
        margin-top: 0;
        margin-bottom: 0;
        font-size: 12px;
        padding: 7px 5px;
        position: absolute;
        top: 15px;
        right: 10px;
        border-radius: 2px
    }

    .content-header>.breadcrumb>li>a {
        color: #444;
        text-decoration: none;
        display: inline-block
    }

    .content-header>.breadcrumb>li>a>.fa,
    .content-header>.breadcrumb>li>a>.glyphicon,
    .content-header>.breadcrumb>li>a>.ion {
        margin-right: 5px
    }

    .content-header>.breadcrumb>li+li:before {
        content: '> '
    }

    @media(max-width:991px) {
        .content-header>.breadcrumb {
            position: relative;
            margin-top: 5px;
            top: 0;
            right: 0;
            float: none;
            background: #d2d6de;
            padding-left: 10px
        }

        .content-header>.breadcrumb li:before {
            color: #97a0b3
        }
    }

    .navbar-toggle {
        color: #fff;
        border: 0;
        margin: 0;
        padding: 15px 15px
    }

    @media(max-width:991px) {
        .navbar-custom-menu .navbar-nav>li {
            float: left
        }

        .navbar-custom-menu .navbar-nav {
            margin: 0;
            float: left
        }

        .navbar-custom-menu .navbar-nav>li>a {
            padding-top: 15px;
            padding-bottom: 15px;
            line-height: 20px
        }
    }

    @media(max-width:767px) {
        .main-header {
            position: relative
        }

        .main-header .logo,
        .main-header .navbar {
            width: 100%;
            float: none
        }

        .main-header .navbar {
            margin: 0
        }

        .main-header .navbar-custom-menu {
            float: right
        }
    }

    @media(max-width:991px) {
        .navbar-collapse.pull-left {
            float: none !important
        }

        .navbar-collapse.pull-left+.navbar-custom-menu {
            display: block;
            position: absolute;
            top: 0;
            right: 40px
        }
    }

    .dropdown-menu {
        box-shadow: none;
        border-color: #eee
    }

    .dropdown-menu>li>a {
        color: #777
    }

    .dropdown-menu>li>a>.glyphicon,
    .dropdown-menu>li>a>.fa,
    .dropdown-menu>li>a>.ion {
        margin-right: 10px
    }

    .dropdown-menu>li>a:hover {
        background-color: #e1e3e9;
        color: #333
    }

    .dropdown-menu>.divider {
        background-color: #eee
    }

    .navbar-nav>.notifications-menu>.dropdown-menu,
    .navbar-nav>.messages-menu>.dropdown-menu,
    .navbar-nav>.tasks-menu>.dropdown-menu {
        width: 280px;
        padding: 0 0 0 0;
        margin: 0;
        top: 100%
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li,
    .navbar-nav>.messages-menu>.dropdown-menu>li,
    .navbar-nav>.tasks-menu>.dropdown-menu>li {
        position: relative
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li.header,
    .navbar-nav>.messages-menu>.dropdown-menu>li.header,
    .navbar-nav>.tasks-menu>.dropdown-menu>li.header {
        border-radius: 4px 4px 0 0;
        background-color: #fff;
        padding: 7px 10px;
        border-bottom: 1px solid #f4f4f4;
        color: #444;
        font-size: 14px
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a,
    .navbar-nav>.messages-menu>.dropdown-menu>li.footer>a,
    .navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a {
        border-radius: 0 0 4px 4px;
        font-size: 12px;
        background-color: #fff;
        padding: 7px 10px;
        border-bottom: 1px solid #eee;
        color: #444 !important;
        text-align: center
    }

    @media(max-width:991px) {

        .navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a,
        .navbar-nav>.messages-menu>.dropdown-menu>li.footer>a,
        .navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a {
            background: #fff !important;
            color: #444 !important
        }
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a:hover,
    .navbar-nav>.messages-menu>.dropdown-menu>li.footer>a:hover,
    .navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a:hover {
        text-decoration: none;
        font-weight: normal
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu,
    .navbar-nav>.messages-menu>.dropdown-menu>li .menu,
    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu {
        max-height: 200px;
        margin: 0;
        padding: 0;
        list-style: none;
        overflow-x: hidden
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a,
    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a,
    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a {
        display: block;
        white-space: nowrap;
        border-bottom: 1px solid #f4f4f4
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a:hover,
    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:hover,
    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a:hover {
        background: #f4f4f4;
        text-decoration: none
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a {
        color: #444;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 10px
    }

    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.glyphicon,
    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.fa,
    .navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.ion {
        width: 20px
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a {
        margin: 0;
        padding: 10px 10px
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>div>img {
        margin: auto 10px auto auto;
        width: 40px;
        height: 40px
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>h4 {
        padding: 0;
        margin: 0 0 0 45px;
        color: #444;
        font-size: 15px;
        position: relative
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>h4>small {
        color: #999;
        font-size: 10px;
        position: absolute;
        top: 0;
        right: 0
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>p {
        margin: 0 0 0 45px;
        font-size: 12px;
        color: #888
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:before,
    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:after {
        content: " ";
        display: table
    }

    .navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:after {
        clear: both
    }

    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a {
        padding: 10px
    }

    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a>h3 {
        font-size: 14px;
        padding: 0;
        margin: 0 0 10px 0;
        color: #666
    }

    .navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a>.progress {
        padding: 0;
        margin: 0
    }

    .navbar-nav>.user-menu>.dropdown-menu {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
        padding: 1px 0 0 0;
        border-top-width: 0;
        width: 280px
    }

    .navbar-nav>.user-menu>.dropdown-menu,
    .navbar-nav>.user-menu>.dropdown-menu>.user-body {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
        height: 175px;
        padding: 10px;
        text-align: center
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header>img {
        z-index: 5;
        height: 90px;
        width: 90px;
        border: 3px solid;
        border-color: transparent;
        border-color: rgba(255, 255, 255, .2)
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header>p {
        z-index: 5;
        color: #fff;
        color: rgba(255, 255, 255, .8);
        font-size: 17px;
        margin-top: 10px
    }

    .navbar-nav>.user-menu>.dropdown-menu>li.user-header>p>small {
        display: block;
        font-size: 12px
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-body {
        padding: 15px;
        border-bottom: 1px solid #f4f4f4;
        border-top: 1px solid #ddd
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-body:before,
    .navbar-nav>.user-menu>.dropdown-menu>.user-body:after {
        content: " ";
        display: table
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-body:after {
        clear: both
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-body a {
        color: #444 !important
    }

    @media(max-width:991px) {
        .navbar-nav>.user-menu>.dropdown-menu>.user-body a {
            background: #fff !important;
            color: #444 !important
        }
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-footer {
        background-color: #f9f9f9;
        padding: 10px
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-footer:before,
    .navbar-nav>.user-menu>.dropdown-menu>.user-footer:after {
        content: " ";
        display: table
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-footer:after {
        clear: both
    }

    .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default {
        color: #666
    }

    @media(max-width:991px) {
        .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default:hover {
            background-color: #f9f9f9
        }
    }

    .navbar-nav>.user-menu .user-image {
        float: left;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        margin-right: 10px;
        margin-top: -2px
    }

    @media(max-width:767px) {
        .navbar-nav>.user-menu .user-image {
            float: none;
            margin-right: 0;
            margin-top: -8px;
            line-height: 10px
        }
    }

    .open:not(.dropup)>.animated-dropdown-menu {
        backface-visibility: visible !important;
        -webkit-animation: flipInX .7s both;
        -o-animation: flipInX .7s both;
        animation: flipInX .7s both
    }

    @keyframes flipInX {
        0% {
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transition-timing-function: ease-in;
            opacity: 0
        }

        40% {
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transition-timing-function: ease-in
        }

        60% {
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }

        80% {
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }

        100% {
            transform: perspective(400px)
        }
    }

    @-webkit-keyframes flipInX {
        0% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-transition-timing-function: ease-in;
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-transition-timing-function: ease-in
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }

        100% {
            -webkit-transform: perspective(400px)
        }
    }

    .navbar-custom-menu>.navbar-nav>li {
        position: relative
    }

    .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
        position: absolute;
        right: 0;
        left: auto
    }

    @media(max-width:991px) {
        .navbar-custom-menu>.navbar-nav {
            float: right
        }

        .navbar-custom-menu>.navbar-nav>li {
            position: static
        }

        .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
            position: absolute;
            right: 5%;
            left: auto;
            border: 1px solid #ddd;
            background: #fff
        }
    }

    .form-control {
        border-radius: 0;
        box-shadow: none;
        border-color: #d2d6de
    }

    .form-control:focus {
        border-color: #2196f3;
        box-shadow: none
    }

    .form-control::-moz-placeholder,
    .form-control:-ms-input-placeholder,
    .form-control::-webkit-input-placeholder {
        color: #bbb;
        opacity: 1
    }

    .form-control:not(select) {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .form-group.has-success label {
        color: #00a65a
    }

    .form-group.has-success .form-control {
        border-color: #00a65a;
        box-shadow: none
    }

    .form-group.has-warning label {
        color: #fbc02d
    }

    .form-group.has-warning .form-control {
        border-color: #fbc02d;
        box-shadow: none
    }

    .form-group.has-error label {
        color: #f44336
    }

    .form-group.has-error .form-control {
        border-color: #f44336;
        box-shadow: none
    }

    .input-group .input-group-addon {
        border-radius: 0;
        border-color: #d2d6de;
        background-color: #fff
    }

    .btn-group-vertical .btn.btn-flat:first-of-type,
    .btn-group-vertical .btn.btn-flat:last-of-type {
        border-radius: 0
    }

    .icheck>label {
        padding-left: 0
    }

    .form-control-feedback.fa {
        line-height: 34px
    }

    .input-lg+.form-control-feedback.fa,
    .input-group-lg+.form-control-feedback.fa,
    .form-group-lg .form-control+.form-control-feedback.fa {
        line-height: 46px
    }

    .input-sm+.form-control-feedback.fa,
    .input-group-sm+.form-control-feedback.fa,
    .form-group-sm .form-control+.form-control-feedback.fa {
        line-height: 30px
    }

    .progress,
    .progress>.progress-bar {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .progress,
    .progress>.progress-bar,
    .progress .progress-bar,
    .progress>.progress-bar .progress-bar {
        border-radius: 1px
    }

    .progress.sm,
    .progress-sm {
        height: 10px
    }

    .progress.sm,
    .progress-sm,
    .progress.sm .progress-bar,
    .progress-sm .progress-bar {
        border-radius: 1px
    }

    .progress.xs,
    .progress-xs {
        height: 7px
    }

    .progress.xs,
    .progress-xs,
    .progress.xs .progress-bar,
    .progress-xs .progress-bar {
        border-radius: 1px
    }

    .progress.xxs,
    .progress-xxs {
        height: 3px
    }

    .progress.xxs,
    .progress-xxs,
    .progress.xxs .progress-bar,
    .progress-xxs .progress-bar {
        border-radius: 1px
    }

    .progress.vertical {
        position: relative;
        width: 30px;
        height: 200px;
        display: inline-block;
        margin-right: 10px
    }

    .progress.vertical>.progress-bar {
        width: 100%;
        position: absolute;
        bottom: 0
    }

    .progress.vertical.sm,
    .progress.vertical.progress-sm {
        width: 20px
    }

    .progress.vertical.xs,
    .progress.vertical.progress-xs {
        width: 10px
    }

    .progress.vertical.xxs,
    .progress.vertical.progress-xxs {
        width: 3px
    }

    .progress-group .progress-text {
        font-weight: 600
    }

    .progress-group .progress-number {
        float: right
    }

    .table tr>td .progress {
        margin: 0
    }

    .progress-bar-light-blue,
    .progress-bar-primary {
        background-color: #2196f3
    }

    .progress-striped .progress-bar-light-blue,
    .progress-striped .progress-bar-primary {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-green,
    .progress-bar-success {
        background-color: #00a65a
    }

    .progress-striped .progress-bar-green,
    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-aqua,
    .progress-bar-info {
        background-color: #29b6f6
    }

    .progress-striped .progress-bar-aqua,
    .progress-striped .progress-bar-info {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-yellow,
    .progress-bar-warning {
        background-color: #fbc02d
    }

    .progress-striped .progress-bar-yellow,
    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-red,
    .progress-bar-danger {
        background-color: #f44336
    }

    .progress-striped .progress-bar-red,
    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .small-box {
        border-radius: 2px;
        position: relative;
        display: block;
        margin-bottom: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .1)
    }

    .small-box>.inner {
        padding: 10px
    }

    .small-box>.small-box-footer {
        position: relative;
        text-align: center;
        padding: 3px 0;
        color: #fff;
        color: rgba(255, 255, 255, .8);
        display: block;
        z-index: 10;
        background: rgba(0, 0, 0, .1);
        text-decoration: none
    }

    .small-box>.small-box-footer:hover {
        color: #fff;
        background: rgba(0, 0, 0, .15)
    }

    .small-box h3 {
        font-size: 38px;
        font-weight: bold;
        margin: 0 0 10px 0;
        white-space: nowrap;
        padding: 0
    }

    .small-box p {
        font-size: 15px
    }

    .small-box p>small {
        display: block;
        color: #f9f9f9;
        font-size: 13px;
        margin-top: 5px
    }

    .small-box h3,
    .small-box p {
        z-index: 5px
    }

    .small-box .icon {
        -webkit-transition: all .15s linear;
        -o-transition: all .15s linear;
        transition: all .15s linear;
        position: absolute;
        top: -10px;
        right: 10px;
        z-index: 0;
        font-size: 90px;
        color: rgba(0, 0, 0, .15)
    }

    .small-box:hover {
        text-decoration: none;
        color: #f9f9f9
    }

    .small-box:hover .icon {
        font-size: 95px
    }

    @media(max-width:767px) {
        .small-box {
            text-align: center
        }

        .small-box .icon {
            display: none
        }

        .small-box p {
            font-size: 12px
        }
    }

    .box {
        position: relative;
        border-radius: 3px;
        background: #fff;
        border-top: 3px solid #d2d6de;
        margin-bottom: 20px;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .1)
    }

    .box.box-primary {
        border-top-color: #2196f3
    }

    .box.box-info {
        border-top-color: #29b6f6
    }

    .box.box-danger {
        border-top-color: #f44336
    }

    .box.box-warning {
        border-top-color: #fbc02d
    }

    .box.box-success {
        border-top-color: #00a65a
    }

    .box.box-default {
        border-top-color: #d2d6de
    }

    .box.collapsed-box .box-body,
    .box.collapsed-box .box-footer {
        display: none
    }

    .box .nav-stacked>li {
        border-bottom: 1px solid #f4f4f4;
        margin: 0
    }

    .box .nav-stacked>li:last-of-type {
        border-bottom: none
    }

    .box.height-control .box-body {
        max-height: 300px;
        overflow: auto
    }

    .box .border-right {
        border-right: 1px solid #f4f4f4
    }

    .box .border-left {
        border-left: 1px solid #f4f4f4
    }

    .box.box-solid {
        border-top: 0
    }

    .box.box-solid>.box-header .btn.btn-default {
        background: transparent
    }

    .box.box-solid>.box-header .btn:hover,
    .box.box-solid>.box-header a:hover {
        background: rgba(0, 0, 0, .1)
    }

    .box.box-solid.box-default {
        border: 1px solid #d2d6de
    }

    .box.box-solid.box-default>.box-header {
        color: #444;
        background: #d2d6de;
        background-color: #d2d6de
    }

    .box.box-solid.box-default>.box-header a,
    .box.box-solid.box-default>.box-header .btn {
        color: #444
    }

    .box.box-solid.box-primary {
        border: 1px solid #2196f3
    }

    .box.box-solid.box-primary>.box-header {
        color: #fff;
        background: #2196f3;
        background-color: #2196f3
    }

    .box.box-solid.box-primary>.box-header a,
    .box.box-solid.box-primary>.box-header .btn {
        color: #fff
    }

    .box.box-solid.box-info {
        border: 1px solid #29b6f6
    }

    .box.box-solid.box-info>.box-header {
        color: #fff;
        background: #29b6f6;
        background-color: #29b6f6
    }

    .box.box-solid.box-info>.box-header a,
    .box.box-solid.box-info>.box-header .btn {
        color: #fff
    }

    .box.box-solid.box-danger {
        border: 1px solid #f44336
    }

    .box.box-solid.box-danger>.box-header {
        color: #fff;
        background: #f44336;
        background-color: #f44336
    }

    .box.box-solid.box-danger>.box-header a,
    .box.box-solid.box-danger>.box-header .btn {
        color: #fff
    }

    .box.box-solid.box-warning {
        border: 1px solid #fbc02d
    }

    .box.box-solid.box-warning>.box-header {
        color: #fff;
        background: #fbc02d;
        background-color: #fbc02d
    }

    .box.box-solid.box-warning>.box-header a,
    .box.box-solid.box-warning>.box-header .btn {
        color: #fff
    }

    .box.box-solid.box-success {
        border: 1px solid #00a65a
    }

    .box.box-solid.box-success>.box-header {
        color: #fff;
        background: #00a65a;
        background-color: #00a65a
    }

    .box.box-solid.box-success>.box-header a,
    .box.box-solid.box-success>.box-header .btn {
        color: #fff
    }

    .box.box-solid>.box-header>.box-tools .btn {
        border: 0;
        box-shadow: none
    }

    .box.box-solid[class*='bg']>.box-header {
        color: #fff
    }

    .box .box-group>.box {
        margin-bottom: 5px
    }

    .box .knob-label {
        text-align: center;
        color: #333;
        font-weight: 100;
        font-size: 12px;
        margin-bottom: .3em
    }

    .box>.overlay,
    .overlay-wrapper>.overlay,
    .box>.loading-img,
    .overlay-wrapper>.loading-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .box .overlay,
    .overlay-wrapper .overlay {
        z-index: 50;
        background: rgba(255, 255, 255, .7);
        border-radius: 3px
    }

    .box .overlay>.fa,
    .overlay-wrapper .overlay>.fa {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -15px;
        margin-top: -15px;
        color: #000;
        font-size: 30px
    }

    .box .overlay.dark,
    .overlay-wrapper .overlay.dark {
        background: rgba(0, 0, 0, .5)
    }

    .box-header:before,
    .box-body:before,
    .box-footer:before,
    .box-header:after,
    .box-body:after,
    .box-footer:after {
        content: " ";
        display: table
    }

    .box-header:after,
    .box-body:after,
    .box-footer:after {
        clear: both
    }

    .box-header {
        color: #444;
        display: block;
        padding: 10px;
        position: relative
    }

    .box-header.with-border {
        border-bottom: 1px solid #f4f4f4
    }

    .collapsed-box .box-header.with-border {
        border-bottom: none
    }

    .box-header>.fa,
    .box-header>.glyphicon,
    .box-header>.ion,
    .box-header .box-title {
        display: inline-block;
        font-size: 18px;
        margin: 0;
        line-height: 1
    }

    .box-header>.fa,
    .box-header>.glyphicon,
    .box-header>.ion {
        margin-right: 5px
    }

    .box-header>.box-tools {
        position: absolute;
        right: 10px;
        top: 5px
    }

    .box-header>.box-tools [data-toggle="tooltip"] {
        position: relative
    }

    .box-header>.box-tools.pull-right .dropdown-menu {
        right: 0;
        left: auto
    }

    .btn-box-tool {
        padding: 5px;
        font-size: 12px;
        background: transparent;
        color: #97a0b3
    }

    .open .btn-box-tool,
    .btn-box-tool:hover {
        color: #606c84
    }

    .btn-box-tool.btn:active {
        box-shadow: none
    }

    .box-body {
        border-radius: 0 0 3px 3px;
        padding: 10px
    }

    .no-header .box-body {
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .box-body>.table {
        margin-bottom: 0
    }

    .box-body .fc {
        margin-top: 5px
    }

    .box-body .full-width-chart {
        margin: -19px
    }

    .box-body.no-padding .full-width-chart {
        margin: -9px
    }

    .box-body .box-pane {
        border-radius: 0 0 0 3px
    }

    .box-body .box-pane-right {
        border-radius: 0 0 3px 0
    }

    .box-footer {
        border-radius: 0 0 3px 3px;
        border-top: 1px solid #f4f4f4;
        padding: 10px;
        background-color: #fff
    }

    .chart-legend {
        margin: 10px 0
    }

    @media(max-width:991px) {
        .chart-legend>li {
            float: left;
            margin-right: 10px
        }
    }

    .box-comments {
        background: #f7f7f7
    }

    .box-comments .box-comment {
        padding: 8px 0;
        border-bottom: 1px solid #eee
    }

    .box-comments .box-comment:before,
    .box-comments .box-comment:after {
        content: " ";
        display: table
    }

    .box-comments .box-comment:after {
        clear: both
    }

    .box-comments .box-comment:last-of-type {
        border-bottom: 0
    }

    .box-comments .box-comment:first-of-type {
        padding-top: 0
    }

    .box-comments .box-comment img {
        float: left
    }

    .box-comments .comment-text {
        margin-left: 40px;
        color: #555
    }

    .box-comments .username {
        color: #444;
        display: block;
        font-weight: 600
    }

    .box-comments .text-muted {
        font-weight: 400;
        font-size: 12px
    }

    .todo-list {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: auto
    }

    .todo-list>li {
        border-radius: 2px;
        padding: 10px;
        background: #f4f4f4;
        margin-bottom: 2px;
        border-left: 2px solid #e6e7e8;
        color: #444
    }

    .todo-list>li:last-of-type {
        margin-bottom: 0
    }

    .todo-list>li>input[type='checkbox'] {
        margin: 0 10px 0 5px
    }

    .todo-list>li .text {
        display: inline-block;
        margin-left: 5px;
        font-weight: 600
    }

    .todo-list>li .label {
        margin-left: 10px;
        font-size: 9px
    }

    .todo-list>li .tools {
        display: none;
        float: right;
        color: #f44336
    }

    .todo-list>li .tools>.fa,
    .todo-list>li .tools>.glyphicon,
    .todo-list>li .tools>.ion {
        margin-right: 5px;
        cursor: pointer
    }

    .todo-list>li:hover .tools {
        display: inline-block
    }

    .todo-list>li.done {
        color: #999
    }

    .todo-list>li.done .text {
        text-decoration: line-through;
        font-weight: 500
    }

    .todo-list>li.done .label {
        background: #d2d6de !important
    }

    .todo-list .danger {
        border-left-color: #f44336
    }

    .todo-list .warning {
        border-left-color: #fbc02d
    }

    .todo-list .info {
        border-left-color: #29b6f6
    }

    .todo-list .success {
        border-left-color: #00a65a
    }

    .todo-list .primary {
        border-left-color: #2196f3
    }

    .todo-list .handle {
        display: inline-block;
        cursor: move;
        margin: 0 5px
    }

    .chat {
        padding: 5px 20px 5px 10px
    }

    .chat .item {
        margin-bottom: 10px
    }

    .chat .item:before,
    .chat .item:after {
        content: " ";
        display: table
    }

    .chat .item:after {
        clear: both
    }

    .chat .item>img {
        width: 40px;
        height: 40px;
        border: 2px solid transparent;
        border-radius: 50%
    }

    .chat .item>.online {
        border: 2px solid #00a65a
    }

    .chat .item>.offline {
        border: 2px solid #f44336
    }

    .chat .item>.message {
        margin-left: 55px;
        margin-top: -40px
    }

    .chat .item>.message>.name {
        display: block;
        font-weight: 600
    }

    .chat .item>.attachment {
        border-radius: 3px;
        background: #f4f4f4;
        margin-left: 65px;
        margin-right: 15px;
        padding: 10px
    }

    .chat .item>.attachment>h4 {
        margin: 0 0 5px 0;
        font-weight: 600;
        font-size: 14px
    }

    .chat .item>.attachment>p,
    .chat .item>.attachment>.filename {
        font-weight: 600;
        font-size: 13px;
        font-style: italic;
        margin: 0
    }

    .chat .item>.attachment:before,
    .chat .item>.attachment:after {
        content: " ";
        display: table
    }

    .chat .item>.attachment:after {
        clear: both
    }

    .box-input {
        max-width: 200px
    }

    .modal .panel-body {
        color: #444
    }

    .info-box {
        display: block;
        min-height: 90px;
        background: #fff;
        width: 100%;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
        border-radius: 2px;
        margin-bottom: 15px
    }

    .info-box small {
        font-size: 14px
    }

    .info-box .progress {
        background: rgba(0, 0, 0, .2);
        margin: 5px -10px 5px -10px;
        height: 2px
    }

    .info-box .progress,
    .info-box .progress .progress-bar {
        border-radius: 0
    }

    .info-box .progress .progress-bar {
        background: #fff
    }

    .info-box-icon {
        border-radius: 2px 0 0 2px;
        display: block;
        float: left;
        height: 90px;
        width: 90px;
        text-align: center;
        font-size: 45px;
        line-height: 90px;
        background: rgba(0, 0, 0, .2)
    }

    .info-box-icon>img {
        max-width: 100%
    }

    .info-box-content {
        padding: 5px 10px;
        margin-left: 90px
    }

    .info-box-number {
        display: block;
        font-weight: bold;
        font-size: 18px
    }

    .progress-description,
    .info-box-text {
        display: block;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .info-box-text {
        text-transform: uppercase
    }

    .info-box-more {
        display: block
    }

    .progress-description {
        margin: 0
    }

    .btn {
        border-radius: 3px;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid transparent
    }

    .btn.uppercase {
        text-transform: uppercase
    }

    .btn.btn-flat {
        border-radius: 0;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-width: 1px
    }

    .btn:active {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn:focus {
        outline: none
    }

    .btn.btn-file {
        position: relative;
        overflow: hidden
    }

    .btn.btn-file>input[type='file'] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        opacity: 0;
        filter: alpha(opacity=0);
        outline: none;
        background: #fff;
        cursor: inherit;
        display: block
    }

    .btn-default {
        background-color: #f4f4f4;
        color: #444;
        border-color: #ddd
    }

    .btn-default:hover,
    .btn-default:active,
    .btn-default.hover {
        background-color: #e7e7e7
    }

    .btn-primary {
        background-color: #2196f3;
        border-color: #0d8aee
    }

    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary.hover {
        background-color: #0d8aee
    }

    .btn-success {
        background-color: #00a65a;
        border-color: #008d4c
    }

    .btn-success:hover,
    .btn-success:active,
    .btn-success.hover {
        background-color: #008d4c
    }

    .btn-info {
        background-color: #29b6f6;
        border-color: #11aef5
    }

    .btn-info:hover,
    .btn-info:active,
    .btn-info.hover {
        background-color: #11aef5
    }

    .btn-danger {
        background-color: #f44336;
        border-color: #f32c1e
    }

    .btn-danger:hover,
    .btn-danger:active,
    .btn-danger.hover {
        background-color: #f32c1e
    }

    .btn-warning {
        background-color: #fbc02d;
        border-color: #fbb814
    }

    .btn-warning:hover,
    .btn-warning:active,
    .btn-warning.hover {
        background-color: #fbb814
    }

    .btn-outline {
        border: 1px solid #fff;
        background: transparent;
        color: #fff
    }

    .btn-outline:hover,
    .btn-outline:focus,
    .btn-outline:active {
        color: rgba(255, 255, 255, .7);
        border-color: rgba(255, 255, 255, .7)
    }

    .btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn[class*='bg-']:hover {
        -webkit-box-shadow: inset 0 0 100px rgba(0, 0, 0, .2);
        box-shadow: inset 0 0 100px rgba(0, 0, 0, .2)
    }

    .btn-app {
        border-radius: 3px;
        position: relative;
        padding: 15px 5px;
        margin: 0 0 10px 10px;
        min-width: 80px;
        height: 60px;
        text-align: center;
        color: #666;
        border: 1px solid #ddd;
        background-color: #f4f4f4;
        font-size: 12px
    }

    .btn-app>.fa,
    .btn-app>.glyphicon,
    .btn-app>.ion {
        font-size: 20px;
        display: block
    }

    .btn-app:hover {
        background: #f4f4f4;
        color: #444;
        border-color: #aaa
    }

    .btn-app:active,
    .btn-app:focus {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-app>.badge {
        position: absolute;
        top: -3px;
        right: -10px;
        font-size: 10px;
        font-weight: 400
    }

    .callout {
        border-radius: 3px;
        margin: 0 0 20px 0;
        padding: 15px 30px 15px 15px;
        border-left: 5px solid #eee
    }

    .callout a {
        color: #fff;
        text-decoration: underline
    }

    .callout a:hover {
        color: #eee
    }

    .callout h4 {
        margin-top: 0;
        font-weight: 600
    }

    .callout p:last-child {
        margin-bottom: 0
    }

    .callout code,
    .callout .highlight {
        background-color: #fff
    }

    .callout.callout-danger {
        border-color: #ea1c0d
    }

    .callout.callout-warning {
        border-color: #f0ad05
    }

    .callout.callout-info {
        border-color: #0a9fe2
    }

    .callout.callout-success {
        border-color: #00733e
    }

    .alert {
        border-radius: 3px
    }

    .alert h4 {
        font-weight: 600
    }

    .alert .icon {
        margin-right: 10px
    }

    .alert .close {
        color: #000;
        opacity: .2;
        filter: alpha(opacity=20)
    }

    .alert .close:hover {
        opacity: .5;
        filter: alpha(opacity=50)
    }

    .alert a {
        color: #fff;
        text-decoration: underline
    }

    .alert-success {
        border-color: #008d4c
    }

    .alert-danger,
    .alert-error {
        border-color: #f32c1e
    }

    .alert-warning {
        border-color: #fbb814
    }

    .alert-info {
        border-color: #11aef5
    }

    .nav>li>a:hover,
    .nav>li>a:active,
    .nav>li>a:focus {
        color: #444;
        background: #f7f7f7
    }

    .nav-pills>li>a {
        border-radius: 0;
        border-top: 3px solid transparent;
        color: #444
    }

    .nav-pills>li>a>.fa,
    .nav-pills>li>a>.glyphicon,
    .nav-pills>li>a>.ion {
        margin-right: 5px
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:hover,
    .nav-pills>li.active>a:focus {
        border-top-color: #2196f3
    }

    .nav-pills>li.active>a {
        font-weight: 600
    }

    .nav-stacked>li>a {
        border-radius: 0;
        border-top: 0;
        border-left: 3px solid transparent;
        color: #444
    }

    .nav-stacked>li.active>a,
    .nav-stacked>li.active>a:hover {
        background: transparent;
        color: #444;
        border-top: 0;
        border-left-color: #2196f3
    }

    .nav-stacked>li.header {
        border-bottom: 1px solid #ddd;
        color: #777;
        margin-bottom: 10px;
        padding: 5px 10px;
        text-transform: uppercase
    }

    .nav-tabs-custom {
        margin-bottom: 20px;
        background: #fff;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
        border-radius: 3px
    }

    .nav-tabs-custom>.nav-tabs {
        margin: 0;
        border-bottom-color: #f4f4f4;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .nav-tabs-custom>.nav-tabs>li {
        border-top: 3px solid transparent;
        margin-bottom: -2px;
        margin-right: 5px
    }

    .nav-tabs-custom>.nav-tabs>li>a {
        color: #444;
        border-radius: 0
    }

    .nav-tabs-custom>.nav-tabs>li>a.text-muted {
        color: #999
    }

    .nav-tabs-custom>.nav-tabs>li>a,
    .nav-tabs-custom>.nav-tabs>li>a:hover {
        background: transparent;
        margin: 0
    }

    .nav-tabs-custom>.nav-tabs>li>a:hover {
        color: #999
    }

    .nav-tabs-custom>.nav-tabs>li:not(.active)>a:hover,
    .nav-tabs-custom>.nav-tabs>li:not(.active)>a:focus,
    .nav-tabs-custom>.nav-tabs>li:not(.active)>a:active {
        border-color: transparent
    }

    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #2196f3
    }

    .nav-tabs-custom>.nav-tabs>li.active>a,
    .nav-tabs-custom>.nav-tabs>li.active:hover>a {
        background-color: #fff;
        color: #444
    }

    .nav-tabs-custom>.nav-tabs>li.active>a {
        border-top-color: transparent;
        border-left-color: #f4f4f4;
        border-right-color: #f4f4f4
    }

    .nav-tabs-custom>.nav-tabs>li:first-of-type {
        margin-left: 0
    }

    .nav-tabs-custom>.nav-tabs>li:first-of-type.active>a {
        border-left-color: transparent
    }

    .nav-tabs-custom>.nav-tabs.pull-right {
        float: none !important
    }

    .nav-tabs-custom>.nav-tabs.pull-right>li {
        float: right
    }

    .nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type {
        margin-right: 0
    }

    .nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type>a {
        border-left-width: 1px
    }

    .nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type.active>a {
        border-left-color: #f4f4f4;
        border-right-color: transparent
    }

    .nav-tabs-custom>.nav-tabs>li.header {
        line-height: 35px;
        padding: 0 10px;
        font-size: 20px;
        color: #444
    }

    .nav-tabs-custom>.nav-tabs>li.header>.fa,
    .nav-tabs-custom>.nav-tabs>li.header>.glyphicon,
    .nav-tabs-custom>.nav-tabs>li.header>.ion {
        margin-right: 5px
    }

    .nav-tabs-custom>.tab-content {
        background: #fff;
        padding: 10px;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .nav-tabs-custom .dropdown.open>a:active,
    .nav-tabs-custom .dropdown.open>a:focus {
        background: transparent;
        color: #999
    }

    .pagination>li>a {
        background: #fafafa;
        color: #666
    }

    .pagination.pagination-flat>li>a {
        border-radius: 0 !important
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        border-top: 1px solid #f4f4f4
    }

    .table>thead>tr>th {
        border-bottom: 2px solid #f4f4f4
    }

    .table tr td .progress {
        margin-top: 5px
    }

    .table-bordered {
        border: 1px solid #f4f4f4
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        border: 1px solid #f4f4f4
    }

    .table-bordered>thead>tr>th,
    .table-bordered>thead>tr>td {
        border-bottom-width: 2px
    }

    .table.no-border,
    .table.no-border td,
    .table.no-border th {
        border: 0
    }

    table.text-center,
    table.text-center td,
    table.text-center th {
        text-align: center
    }

    .table.align th {
        text-align: left
    }

    .table.align td {
        text-align: right
    }

    .label-default {
        background-color: #d2d6de;
        color: #444
    }

    .carousel-control.left,
    .carousel-control.right {
        background-image: none
    }

    .carousel-control>.fa {
        font-size: 40px;
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -20px
    }

    .modal {
        background: rgba(0, 0, 0, .3)
    }

    .modal-content {
        border-radius: 0;
        -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .125);
        box-shadow: 0 2px 3px rgba(0, 0, 0, .125);
        border: 0
    }

    @media(min-width:768px) {
        .modal-content {
            -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .125);
            box-shadow: 0 2px 3px rgba(0, 0, 0, .125)
        }
    }

    .modal-header {
        border-bottom-color: #f4f4f4
    }

    .modal-footer {
        border-top-color: #f4f4f4
    }

    .modal-primary .modal-header,
    .modal-primary .modal-footer {
        border-color: #0c7cd5
    }

    .modal-warning .modal-header,
    .modal-warning .modal-footer {
        border-color: #f0ad05
    }

    .modal-info .modal-header,
    .modal-info .modal-footer {
        border-color: #0a9fe2
    }

    .modal-success .modal-header,
    .modal-success .modal-footer {
        border-color: #00733e
    }

    .modal-danger .modal-header,
    .modal-danger .modal-footer {
        border-color: #ea1c0d
    }

    .box-widget {
        border: none;
        position: relative
    }

    .widget-user .widget-user-header {
        padding: 20px;
        height: 120px;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .widget-user .widget-user-username {
        margin-top: 0;
        margin-bottom: 5px;
        font-size: 25px;
        font-weight: 300;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .2)
    }

    .widget-user .widget-user-desc {
        margin-top: 0
    }

    .widget-user .widget-user-image {
        position: absolute;
        top: 65px;
        left: 50%;
        margin-left: -45px
    }

    .widget-user .widget-user-image>img {
        width: 90px;
        height: auto;
        border: 3px solid #fff
    }

    .widget-user .box-footer {
        padding-top: 30px
    }

    .widget-user-2 .widget-user-header {
        padding: 20px;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .widget-user-2 .widget-user-username {
        margin-top: 5px;
        margin-bottom: 5px;
        font-size: 25px;
        font-weight: 300
    }

    .widget-user-2 .widget-user-desc {
        margin-top: 0
    }

    .widget-user-2 .widget-user-username,
    .widget-user-2 .widget-user-desc {
        margin-left: 75px
    }

    .widget-user-2 .widget-user-image>img {
        width: 65px;
        height: auto;
        float: left
    }

    .pad {
        padding: 10px
    }

    .margin {
        margin: 10px
    }

    .margin-bottom {
        margin-bottom: 20px
    }

    .margin-bottom-none {
        margin-bottom: 0
    }

    .margin-r-5 {
        margin-right: 5px
    }

    .inline {
        display: inline
    }

    .description-block {
        display: block;
        margin: 10px 0;
        text-align: center
    }

    .description-block.margin-bottom {
        margin-bottom: 25px
    }

    .description-block>.description-header {
        margin: 0;
        padding: 0;
        font-weight: 600;
        font-size: 16px
    }

    .description-block>.description-text {
        text-transform: uppercase
    }

    .bg-red,
    .bg-yellow,
    .bg-aqua,
    .bg-blue,
    .bg-light-blue,
    .bg-green,
    .bg-navy,
    .bg-teal,
    .bg-olive,
    .bg-lime,
    .bg-orange,
    .bg-fuchsia,
    .bg-purple,
    .bg-maroon,
    .bg-black,
    .bg-red-active,
    .bg-yellow-active,
    .bg-aqua-active,
    .bg-blue-active,
    .bg-light-blue-active,
    .bg-green-active,
    .bg-navy-active,
    .bg-teal-active,
    .bg-olive-active,
    .bg-lime-active,
    .bg-orange-active,
    .bg-fuchsia-active,
    .bg-purple-active,
    .bg-maroon-active,
    .bg-black-active,
    .callout.callout-danger,
    .callout.callout-warning,
    .callout.callout-info,
    .callout.callout-success,
    .alert-success,
    .alert-danger,
    .alert-error,
    .alert-warning,
    .alert-info,
    .label-danger,
    .label-info,
    .label-warning,
    .label-primary,
    .label-success,
    .modal-primary .modal-body,
    .modal-primary .modal-header,
    .modal-primary .modal-footer,
    .modal-warning .modal-body,
    .modal-warning .modal-header,
    .modal-warning .modal-footer,
    .modal-info .modal-body,
    .modal-info .modal-header,
    .modal-info .modal-footer,
    .modal-success .modal-body,
    .modal-success .modal-header,
    .modal-success .modal-footer,
    .modal-danger .modal-body,
    .modal-danger .modal-header,
    .modal-danger .modal-footer {
        color: #fff !important
    }

    .bg-gray {
        color: #000;
        background-color: #d2d6de !important
    }

    .bg-gray-light {
        background-color: #f7f7f7
    }

    .bg-black {
        background-color: #111 !important
    }

    .bg-red,
    .callout.callout-danger,
    .alert-danger,
    .alert-error,
    .label-danger,
    .modal-danger .modal-body {
        background-color: #f44336 !important
    }

    .bg-yellow,
    .callout.callout-warning,
    .alert-warning,
    .label-warning,
    .modal-warning .modal-body {
        background-color: #fbc02d !important
    }

    .bg-aqua,
    .callout.callout-info,
    .alert-info,
    .label-info,
    .modal-info .modal-body {
        background-color: #29b6f6 !important
    }

    .bg-blue {
        background-color: #1976d2 !important
    }

    .bg-light-blue,
    .label-primary,
    .modal-primary .modal-body {
        background-color: #2196f3 !important
    }

    .bg-green,
    .callout.callout-success,
    .alert-success,
    .label-success,
    .modal-success .modal-body {
        background-color: #00a65a !important
    }

    .bg-navy {
        background-color: #001f3f !important
    }

    .bg-teal {
        background-color: #39cccc !important
    }

    .bg-olive {
        background-color: #3d9970 !important
    }

    .bg-lime {
        background-color: #01ff70 !important
    }

    .bg-orange {
        background-color: #ff851b !important
    }

    .bg-fuchsia {
        background-color: #f012be !important
    }

    .bg-purple {
        background-color: #605ca8 !important
    }

    .bg-maroon {
        background-color: #d81b60 !important
    }

    .bg-gray-active {
        color: #000;
        background-color: #b5bbc8 !important
    }

    .bg-black-active {
        background-color: #000 !important
    }

    .bg-red-active,
    .modal-danger .modal-header,
    .modal-danger .modal-footer {
        background-color: #f22819 !important
    }

    .bg-yellow-active,
    .modal-warning .modal-header,
    .modal-warning .modal-footer {
        background-color: #fab70f !important
    }

    .bg-aqua-active,
    .modal-info .modal-header,
    .modal-info .modal-footer {
        background-color: #0cacf5 !important
    }

    .bg-blue-active {
        background-color: #145ca4 !important
    }

    .bg-light-blue-active,
    .modal-primary .modal-header,
    .modal-primary .modal-footer {
        background-color: #0d87e9 !important
    }

    .bg-green-active,
    .modal-success .modal-header,
    .modal-success .modal-footer {
        background-color: #008d4c !important
    }

    .bg-navy-active {
        background-color: #001a35 !important
    }

    .bg-teal-active {
        background-color: #30bbbb !important
    }

    .bg-olive-active {
        background-color: #368763 !important
    }

    .bg-lime-active {
        background-color: #00e765 !important
    }

    .bg-orange-active {
        background-color: #ff7701 !important
    }

    .bg-fuchsia-active {
        background-color: #db0ead !important
    }

    .bg-purple-active {
        background-color: #555299 !important
    }

    .bg-maroon-active {
        background-color: #ca195a !important
    }

    [class^="bg-"].disabled {
        opacity: .65;
        filter: alpha(opacity=65)
    }

    .text-red {
        color: #f44336 !important
    }

    .text-yellow {
        color: #fbc02d !important
    }

    .text-aqua {
        color: #29b6f6 !important
    }

    .text-blue {
        color: #1976d2 !important
    }

    .text-black {
        color: #111 !important
    }

    .text-light-blue {
        color: #2196f3 !important
    }

    .text-green {
        color: #00a65a !important
    }

    .text-gray {
        color: #d2d6de !important
    }

    .text-navy {
        color: #001f3f !important
    }

    .text-teal {
        color: #39cccc !important
    }

    .text-olive {
        color: #3d9970 !important
    }

    .text-lime {
        color: #01ff70 !important
    }

    .text-orange {
        color: #ff851b !important
    }

    .text-fuchsia {
        color: #f012be !important
    }

    .text-purple {
        color: #605ca8 !important
    }

    .text-maroon {
        color: #d81b60 !important
    }

    .link-muted {
        color: #7a869d
    }

    .link-muted:hover,
    .link-muted:focus {
        color: #606c84
    }

    .link-black {
        color: #666
    }

    .link-black:hover,
    .link-black:focus {
        color: #999
    }

    .hide {
        display: none !important
    }

    .no-border {
        border: 0 !important
    }

    .no-padding {
        padding: 0 !important
    }

    .no-margin {
        margin: 0 !important
    }

    .no-shadow {
        box-shadow: none !important
    }

    .list-unstyled,
    .chart-legend {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .list-group-unbordered>.list-group-item {
        border-left: 0;
        border-right: 0;
        border-radius: 0;
        padding-left: 0;
        padding-right: 0
    }

    .flat {
        border-radius: 0 !important
    }

    .text-bold,
    .text-bold.table td,
    .text-bold.table th {
        font-weight: 700
    }

    .text-sm {
        font-size: 12px
    }

    .jqstooltip {
        padding: 5px !important;
        width: auto !important;
        height: auto !important
    }

    .bg-teal-gradient {
        background: #39cccc !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #39cccc), color-stop(1, #7adddd)) !important;
        background: -ms-linear-gradient(bottom, #39cccc, #7adddd) !important;
        background: -moz-linear-gradient(center bottom, #39cccc 0%, #7adddd 100%) !important;
        background: -o-linear-gradient(#7adddd, #39cccc) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7adddd', endColorstr='#39CCCC', GradientType=0) !important;
        color: #fff
    }

    .bg-light-blue-gradient {
        background: #2196f3 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #2196f3), color-stop(1, #5bb1f6)) !important;
        background: -ms-linear-gradient(bottom, #2196f3, #5bb1f6) !important;
        background: -moz-linear-gradient(center bottom, #2196f3 0%, #5bb1f6 100%) !important;
        background: -o-linear-gradient(#5bb1f6, #2196f3) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bb1f6', endColorstr='#2196F3', GradientType=0) !important;
        color: #fff
    }

    .bg-primary-gradient {
        background: #003c71 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #0057a4), color-stop(1, #003c71)) !important;
        background: -ms-linear-gradient(bottom, #0057a4, #003c71) !important;
        background: -moz-linear-gradient(center bottom, #0057a4 0%, #003c71 100%) !important;
        background: -o-linear-gradient(#003c71, #0057a4) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#003C71', endColorstr='#0057a4', GradientType=0) !important;
        color: #fff
    }

    .bg-blue-gradient {
        background: #1976d2 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #1976d2), color-stop(1, #2988e6)) !important;
        background: -ms-linear-gradient(bottom, #1976d2, #2988e6) !important;
        background: -moz-linear-gradient(center bottom, #1976d2 0%, #2988e6 100%) !important;
        background: -o-linear-gradient(#2988e6, #1976d2) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2988e6', endColorstr='#1976D2', GradientType=0) !important;
        color: #fff
    }

    .bg-aqua-gradient {
        background: #29b6f6 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #29b6f6), color-stop(1, #4bc2f7)) !important;
        background: -ms-linear-gradient(bottom, #29b6f6, #4bc2f7) !important;
        background: -moz-linear-gradient(center bottom, #29b6f6 0%, #4bc2f7 100%) !important;
        background: -o-linear-gradient(#4bc2f7, #29b6f6) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4bc2f7', endColorstr='#29B6F6', GradientType=0) !important;
        color: #fff
    }

    .bg-yellow-gradient {
        background: #fbc02d !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #fbc02d), color-stop(1, #fdd87d)) !important;
        background: -ms-linear-gradient(bottom, #fbc02d, #fdd87d) !important;
        background: -moz-linear-gradient(center bottom, #fbc02d 0%, #fdd87d 100%) !important;
        background: -o-linear-gradient(#fdd87d, #fbc02d) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd87d', endColorstr='#FBC02D', GradientType=0) !important;
        color: #fff
    }

    .bg-purple-gradient {
        background: #605ca8 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #605ca8), color-stop(1, #9491c4)) !important;
        background: -ms-linear-gradient(bottom, #605ca8, #9491c4) !important;
        background: -moz-linear-gradient(center bottom, #605ca8 0%, #9491c4 100%) !important;
        background: -o-linear-gradient(#9491c4, #605ca8) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#9491c4', endColorstr='#605ca8', GradientType=0) !important;
        color: #fff
    }

    .bg-green-gradient {
        background: #00a65a !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #00a65a), color-stop(1, #00ca6d)) !important;
        background: -ms-linear-gradient(bottom, #00a65a, #00ca6d) !important;
        background: -moz-linear-gradient(center bottom, #00a65a 0%, #00ca6d 100%) !important;
        background: -o-linear-gradient(#00ca6d, #00a65a) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ca6d', endColorstr='#00a65a', GradientType=0) !important;
        color: #fff
    }

    .bg-red-gradient {
        background: #f44336 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #f44336), color-stop(1, #f77066)) !important;
        background: -ms-linear-gradient(bottom, #f44336, #f77066) !important;
        background: -moz-linear-gradient(center bottom, #f44336 0%, #f77066 100%) !important;
        background: -o-linear-gradient(#f77066, #f44336) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f77066', endColorstr='#F44336', GradientType=0) !important;
        color: #fff
    }

    .bg-black-gradient {
        background: #111 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #111), color-stop(1, #2b2b2b)) !important;
        background: -ms-linear-gradient(bottom, #111, #2b2b2b) !important;
        background: -moz-linear-gradient(center bottom, #111 0%, #2b2b2b 100%) !important;
        background: -o-linear-gradient(#2b2b2b, #111) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b2b2b', endColorstr='#111', GradientType=0) !important;
        color: #fff
    }

    .bg-maroon-gradient {
        background: #d81b60 !important;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #d81b60), color-stop(1, #e73f7c)) !important;
        background: -ms-linear-gradient(bottom, #d81b60, #e73f7c) !important;
        background: -moz-linear-gradient(center bottom, #d81b60 0%, #e73f7c 100%) !important;
        background: -o-linear-gradient(#e73f7c, #d81b60) !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e73f7c', endColorstr='#D81B60', GradientType=0) !important;
        color: #fff
    }

    .description-block .description-icon {
        font-size: 16px
    }

    .no-pad-top {
        padding-top: 0
    }

    .position-static {
        position: static !important
    }

    .list-header {
        font-size: 15px;
        padding: 10px 4px;
        font-weight: bold;
        color: #666
    }

    .list-seperator {
        height: 1px;
        background: #f4f4f4;
        margin: 15px 0 9px 0
    }

    .list-link>a {
        padding: 4px;
        color: #777
    }

    .list-link>a:hover {
        color: #222
    }

    .font-light {
        font-weight: 300
    }

    .user-block:before,
    .user-block:after {
        content: " ";
        display: table
    }

    .user-block:after {
        clear: both
    }

    .user-block img {
        width: 40px;
        height: 40px;
        float: left
    }

    .user-block .username,
    .user-block .description,
    .user-block .comment {
        display: block;
        margin-left: 50px
    }

    .user-block .username {
        font-size: 16px;
        font-weight: 600
    }

    .user-block .description {
        color: #999;
        font-size: 13px
    }

    .user-block.user-block-sm .username,
    .user-block.user-block-sm .description,
    .user-block.user-block-sm .comment {
        margin-left: 40px
    }

    .user-block.user-block-sm .username {
        font-size: 14px
    }

    .img-sm,
    .img-md,
    .img-lg,
    .box-comments .box-comment img,
    .user-block.user-block-sm img {
        float: left
    }

    .img-sm,
    .box-comments .box-comment img,
    .user-block.user-block-sm img {
        width: 30px !important;
        height: 30px !important
    }

    .img-sm+.img-push {
        margin-left: 40px
    }

    .img-md {
        width: 60px;
        height: 60px
    }

    .img-md+.img-push {
        margin-left: 70px
    }

    .img-lg {
        width: 100px;
        height: 100px
    }

    .img-lg+.img-push {
        margin-left: 110px
    }

    .img-bordered {
        border: 3px solid #d2d6de;
        padding: 3px
    }

    .img-bordered-sm {
        border: 2px solid #d2d6de;
        padding: 2px
    }

    .attachment-block {
        border: 1px solid #f4f4f4;
        padding: 5px;
        margin-bottom: 10px;
        background: #f7f7f7
    }

    .attachment-block .attachment-img {
        max-width: 100px;
        max-height: 100px;
        height: auto;
        float: left
    }

    .attachment-block .attachment-pushed {
        margin-left: 110px
    }

    .attachment-block .attachment-heading {
        margin: 0
    }

    .attachment-block .attachment-text {
        color: #555
    }

    .connectedSortable {
        min-height: 100px
    }

    .ui-helper-hidden-accessible {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .sort-highlight {
        background: #f4f4f4;
        border: 1px dashed #ddd;
        margin-bottom: 10px
    }

    .full-opacity-hover {
        opacity: .65;
        filter: alpha(opacity=65)
    }

    .full-opacity-hover:hover {
        opacity: 1;
        filter: alpha(opacity=100)
    }

    .chart {
        position: relative;
        overflow: hidden;
        width: 100%
    }

    .chart svg,
    .chart canvas {
        width: 100% !important
    }

    @media print {

        .no-print,
        .main-sidebar,
        .left-side,
        .main-header,
        .content-header {
            display: none !important
        }

        .content-wrapper,
        .right-side,
        .main-footer {
            margin-left: 0 !important;
            min-height: 0 !important;
            -webkit-transform: translate(0, 0) !important;
            -ms-transform: translate(0, 0) !important;
            -o-transform: translate(0, 0) !important;
            transform: translate(0, 0) !important
        }

        .fixed .content-wrapper,
        .fixed .right-side {
            padding-top: 0 !important
        }

        .invoice {
            width: 100%;
            border: 0;
            margin: 0;
            padding: 0
        }

        .invoice-col {
            float: left;
            width: 33.3333333%
        }

        .table-responsive {
            overflow: auto
        }

        .table-responsive>.table tr th,
        .table-responsive>.table tr td {
            white-space: normal !important
        }
    }

    .skin-blue .main-header .navbar {
        background-color: #003c71
    }

    .skin-blue .main-header .navbar .nav>li>a {
        color: #fff
    }

    .skin-blue .main-header .navbar .nav>li>a:hover,
    .skin-blue .main-header .navbar .nav>li>a:active,
    .skin-blue .main-header .navbar .nav>li>a:focus,
    .skin-blue .main-header .navbar .nav .open>a,
    .skin-blue .main-header .navbar .nav .open>a:hover,
    .skin-blue .main-header .navbar .nav .open>a:focus,
    .skin-blue .main-header .navbar .nav>.active>a {
        background: rgba(0, 0, 0, .1);
        color: #f6f6f6
    }

    .skin-blue .main-header .navbar .sidebar-toggle {
        color: #fff
    }

    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        color: #f6f6f6;
        background: rgba(0, 0, 0, .1)
    }

    .skin-blue .main-header .navbar .sidebar-toggle {
        color: #fff
    }

    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        background-color: #002e58
    }

    @media(max-width:767px) {
        .skin-blue .main-header .navbar .dropdown-menu li.divider {
            background-color: rgba(255, 255, 255, .1)
        }

        .skin-blue .main-header .navbar .dropdown-menu li a {
            color: #fff
        }

        .skin-blue .main-header .navbar .dropdown-menu li a:hover {
            background: #002e58
        }
    }

    .skin-blue .main-header .logo {
        background-color: #002e58;
        color: #fff;
        border-bottom: 0 solid transparent
    }

    .skin-blue .main-header .logo:hover {
        background-color: #002c52
    }

    .skin-blue .main-header li.user-header {
        background-color: #003c71
    }

    .skin-blue .content-header {
        background: transparent
    }

    /* .skin-blue .wrapper,
    .skin-blue .main-sidebar,
    .skin-blue .left-side {
        background-color: #222d32
    } */

    .skin-blue .user-panel>.info,
    .skin-blue .user-panel>.info>a {
        color: #fff
    }

    .skin-blue .sidebar-menu>li.header {
        color: #4b646f;
        background: #1a2226
    }

    .skin-blue .sidebar-menu>li>a {
        border-left: 3px solid transparent
    }

    .skin-blue .sidebar-menu>li:hover>a,
    .skin-blue .sidebar-menu>li.active>a {
        color: #fff;
        background: #1e282c;
        border-left-color: #003c71
    }

    .skin-blue .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #2c3b41
    }

    .skin-blue .sidebar a {
        color: #b8c7ce
    }

    .skin-blue .sidebar a:hover {
        text-decoration: none
    }

    .skin-blue .treeview-menu>li>a {
        color: #8aa4af
    }

    .skin-blue .treeview-menu>li.active>a,
    .skin-blue .treeview-menu>li>a:hover {
        color: #fff
    }

    .skin-blue .sidebar-form {
        border-radius: 3px;
        border: 1px solid #374850;
        margin: 10px 10px
    }

    .skin-blue .sidebar-form input[type="text"],
    .skin-blue .sidebar-form .btn {
        box-shadow: none;
        background-color: #374850;
        border: 1px solid transparent;
        height: 35px;
        -webkit-transition: all .15s ease-in-out;
        -o-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out
    }

    .skin-blue .sidebar-form input[type="text"] {
        color: #666;
        border-radius: 2px 0 0 2px
    }

    .skin-blue .sidebar-form input[type="text"]:focus,
    .skin-blue .sidebar-form input[type="text"]:focus+.input-group-btn .btn {
        background-color: #fff;
        color: #666
    }

    .skin-blue .sidebar-form input[type="text"]:focus+.input-group-btn .btn {
        border-left-color: #fff
    }

    .skin-blue .sidebar-form .btn {
        color: #999;
        border-radius: 0 2px 2px 0
    }

    .skin-blue.layout-top-nav .main-header>.logo {
        background-color: #003c71;
        color: #fff;
        border-bottom: 0 solid transparent
    }

    .skin-blue.layout-top-nav .main-header>.logo:hover {
        background-color: #00396c
    }

    .daterangepicker {
        position: absolute;
        color: inherit;
        background: #fff;
        border-radius: 4px;
        width: 278px;
        padding: 4px;
        margin-top: 1px;
        top: 100px;
        left: 20px
    }

    .daterangepicker:before,
    .daterangepicker:after {
        position: absolute;
        display: inline-block;
        border-bottom-color: rgba(0, 0, 0, .2);
        content: ''
    }

    .daterangepicker:before {
        top: -7px;
        border-right: 7px solid transparent;
        border-left: 7px solid transparent;
        border-bottom: 7px solid #ccc
    }

    .daterangepicker:after {
        top: -6px;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent
    }

    .daterangepicker.opensleft:before {
        right: 9px
    }

    .daterangepicker.opensleft:after {
        right: 10px
    }

    .daterangepicker.openscenter:before {
        left: 0;
        right: 0;
        width: 0;
        margin-left: auto;
        margin-right: auto
    }

    .daterangepicker.openscenter:after {
        left: 0;
        right: 0;
        width: 0;
        margin-left: auto;
        margin-right: auto
    }

    .daterangepicker.opensright:before {
        left: 9px
    }

    .daterangepicker.opensright:after {
        left: 10px
    }

    .daterangepicker.dropup {
        margin-top: -5px
    }

    .daterangepicker.dropup:before {
        top: initial;
        bottom: -7px;
        border-bottom: initial;
        border-top: 7px solid #ccc
    }

    .daterangepicker.dropup:after {
        top: initial;
        bottom: -6px;
        border-bottom: initial;
        border-top: 6px solid #fff
    }

    .daterangepicker.dropdown-menu {
        max-width: none;
        z-index: 3001
    }

    .daterangepicker.single .ranges,
    .daterangepicker.single .calendar {
        float: none
    }

    .daterangepicker.show-calendar .calendar {
        display: block
    }

    .daterangepicker .calendar {
        display: none;
        max-width: 270px;
        margin: 4px
    }

    .daterangepicker .calendar.single .calendar-table {
        border: none
    }

    .daterangepicker .calendar th,
    .daterangepicker .calendar td {
        white-space: nowrap;
        text-align: center;
        min-width: 32px
    }

    .daterangepicker .calendar-table {
        border: 1px solid #fff;
        padding: 4px;
        border-radius: 4px;
        background: #fff
    }

    .daterangepicker table {
        width: 100%;
        margin: 0
    }

    .daterangepicker td,
    .daterangepicker th {
        text-align: center;
        width: 20px;
        height: 20px;
        border-radius: 4px;
        border: 1px solid transparent;
        white-space: nowrap;
        cursor: pointer
    }

    .daterangepicker td.available:hover,
    .daterangepicker th.available:hover {
        background: #eee
    }

    .daterangepicker td.week,
    .daterangepicker th.week {
        font-size: 80%;
        color: #ccc
    }

    .daterangepicker td.off,
    .daterangepicker td.off.in-range,
    .daterangepicker td.off.start-date,
    .daterangepicker td.off.end-date {
        background-color: #fff;
        border-color: transparent;
        color: #999
    }

    .daterangepicker td.in-range {
        background-color: #ebf4f8;
        border-color: transparent;
        color: #000;
        border-radius: 0
    }

    .daterangepicker td.start-date {
        border-radius: 4px 0 0 4px
    }

    .daterangepicker td.end-date {
        border-radius: 0 4px 4px 0
    }

    .daterangepicker td.start-date.end-date {
        border-radius: 4px
    }

    .daterangepicker td.active,
    .daterangepicker td.active:hover {
        background-color: #357ebd;
        border-color: transparent;
        color: #fff
    }

    .daterangepicker th.month {
        width: auto
    }

    .daterangepicker td.disabled,
    .daterangepicker option.disabled {
        color: #999;
        cursor: not-allowed;
        text-decoration: line-through
    }

    .daterangepicker select.monthselect,
    .daterangepicker select.yearselect {
        font-size: 12px;
        padding: 1px;
        height: auto;
        margin: 0;
        cursor: default
    }

    .daterangepicker select.monthselect {
        margin-right: 2%;
        width: 56%
    }

    .daterangepicker select.yearselect {
        width: 40%
    }

    .daterangepicker select.hourselect,
    .daterangepicker select.minuteselect,
    .daterangepicker select.secondselect,
    .daterangepicker select.ampmselect {
        width: 50px;
        margin-bottom: 0
    }

    .daterangepicker .input-mini {
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #555;
        height: 30px;
        line-height: 30px;
        display: block;
        vertical-align: middle;
        margin: 0 0 5px 0;
        padding: 0 6px 0 28px;
        width: 100%
    }

    .daterangepicker .input-mini.active {
        border: 1px solid #08c;
        border-radius: 4px
    }

    .daterangepicker .daterangepicker_input {
        position: relative
    }

    .daterangepicker .daterangepicker_input i {
        position: absolute;
        left: 8px;
        top: 8px
    }

    .daterangepicker .calendar-time {
        text-align: center;
        margin: 5px auto;
        line-height: 30px;
        position: relative;
        padding-left: 28px
    }

    .daterangepicker .calendar-time select.disabled {
        color: #ccc;
        cursor: not-allowed
    }

    .ranges {
        font-size: 11px;
        float: none;
        margin: 4px;
        text-align: left
    }

    .ranges ul {
        list-style: none;
        margin: 0 auto;
        padding: 0;
        width: 100%
    }

    .ranges li {
        font-size: 13px;
        background: #f5f5f5;
        border: 1px solid #f5f5f5;
        border-radius: 4px;
        color: #08c;
        padding: 3px 12px;
        margin-bottom: 8px;
        cursor: pointer
    }

    .ranges li:hover {
        background: #08c;
        border: 1px solid #08c;
        color: #fff
    }

    .ranges li.active {
        background: #08c;
        border: 1px solid #08c;
        color: #fff
    }

    @media(min-width:564px) {
        .daterangepicker {
            width: auto
        }

        .daterangepicker .ranges ul {
            width: 160px
        }

        .daterangepicker.single .ranges ul {
            width: 100%
        }

        .daterangepicker.single .calendar.left {
            clear: none
        }

        .daterangepicker.single .ranges,
        .daterangepicker.single .calendar {
            float: left
        }

        .daterangepicker .calendar.left {
            clear: left;
            margin-right: 0
        }

        .daterangepicker .calendar.left .calendar-table {
            border-right: none;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .daterangepicker .calendar.right {
            margin-left: 0
        }

        .daterangepicker .calendar.right .calendar-table {
            border-left: none;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .daterangepicker .left .daterangepicker_input {
            padding-right: 12px
        }

        .daterangepicker .calendar.left .calendar-table {
            padding-right: 12px
        }

        .daterangepicker .ranges,
        .daterangepicker .calendar {
            float: left
        }
    }

    @media(min-width:730px) {
        .daterangepicker .ranges {
            width: auto;
            float: left
        }

        .daterangepicker .calendar.left {
            clear: none
        }
    }

    @font-face {
        font-family: 'FontAwesome';
        src: url(/du-lich/content/fonts/fontawesome-webfont.eot?v=4.7.0);
        src: url(/du-lich/content/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'), url(/du-lich/content/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(/du-lich/content/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(/du-lich/content/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url(/du-lich/content/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
        font-weight: normal;
        font-style: normal
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .fa-lg {
        font-size: 1.33333333em;
        line-height: .75em;
        vertical-align: -15%
    }

    .fa-2x {
        font-size: 2em
    }

    .fa-3x {
        font-size: 3em
    }

    .fa-4x {
        font-size: 4em
    }

    .fa-5x {
        font-size: 5em
    }

    .fa-fw {
        width: 1.28571429em;
        text-align: center
    }

    .fa-ul {
        padding-left: 0;
        margin-left: 2.14285714em;
        list-style-type: none
    }

    .fa-ul>li {
        position: relative
    }

    .fa-li {
        position: absolute;
        left: -2.14285714em;
        width: 2.14285714em;
        top: .14285714em;
        text-align: center
    }

    .fa-li.fa-lg {
        left: -1.85714286em
    }

    .fa-border {
        padding: .2em .25em .15em;
        border: solid .08em #eee;
        border-radius: .1em
    }

    .fa-pull-left {
        float: left
    }

    .fa-pull-right {
        float: right
    }

    .fa.fa-pull-left {
        margin-right: .3em
    }

    .fa.fa-pull-right {
        margin-left: .3em
    }

    .pull-right {
        float: right
    }

    .pull-left {
        float: left
    }

    .fa.pull-left {
        margin-right: .3em
    }

    .fa.pull-right {
        margin-left: .3em
    }

    .fa-spin {
        -webkit-animation: fa-spin 2s infinite linear;
        animation: fa-spin 2s infinite linear
    }

    .fa-pulse {
        -webkit-animation: fa-spin 1s infinite steps(8);
        animation: fa-spin 1s infinite steps(8)
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .fa-rotate-90 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg)
    }

    .fa-rotate-180 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .fa-rotate-270 {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
        -webkit-transform: rotate(270deg);
        -ms-transform: rotate(270deg);
        transform: rotate(270deg)
    }

    .fa-flip-horizontal {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
        -webkit-transform: scale(-1, 1);
        -ms-transform: scale(-1, 1);
        transform: scale(-1, 1)
    }

    .fa-flip-vertical {
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
        -webkit-transform: scale(1, -1);
        -ms-transform: scale(1, -1);
        transform: scale(1, -1)
    }

    :root .fa-rotate-90,
    :root .fa-rotate-180,
    :root .fa-rotate-270,
    :root .fa-flip-horizontal,
    :root .fa-flip-vertical {
        filter: none
    }

    .fa-stack {
        position: relative;
        display: inline-block;
        width: 2em;
        height: 2em;
        line-height: 2em;
        vertical-align: middle
    }

    .fa-stack-1x,
    .fa-stack-2x {
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center
    }

    .fa-stack-1x {
        line-height: inherit
    }

    .fa-stack-2x {
        font-size: 2em
    }

    .fa-inverse {
        color: #fff
    }

    .fa-glass:before {
        content: ""
    }

    .fa-music:before {
        content: ""
    }

    .fa-search:before {
        content: ""
    }

    .fa-envelope-o:before {
        content: ""
    }

    .fa-heart:before {
        content: ""
    }

    .fa-star:before {
        content: ""
    }

    .fa-star-o:before {
        content: ""
    }

    .fa-user:before {
        content: ""
    }

    .fa-film:before {
        content: ""
    }

    .fa-th-large:before {
        content: ""
    }

    .fa-th:before {
        content: ""
    }

    .fa-th-list:before {
        content: ""
    }

    .fa-check:before {
        content: ""
    }

    .fa-remove:before,
    .fa-close:before,
    .fa-times:before {
        content: ""
    }

    .fa-search-plus:before {
        content: ""
    }

    .fa-search-minus:before {
        content: ""
    }

    .fa-power-off:before {
        content: ""
    }

    .fa-signal:before {
        content: ""
    }

    .fa-gear:before,
    .fa-cog:before {
        content: ""
    }

    .fa-trash-o:before {
        content: ""
    }

    .fa-home:before {
        content: ""
    }

    .fa-file-o:before {
        content: ""
    }

    .fa-clock-o:before {
        content: ""
    }

    .fa-road:before {
        content: ""
    }

    .fa-download:before {
        content: ""
    }

    .fa-arrow-circle-o-down:before {
        content: ""
    }

    .fa-arrow-circle-o-up:before {
        content: ""
    }

    .fa-inbox:before {
        content: ""
    }

    .fa-play-circle-o:before {
        content: ""
    }

    .fa-rotate-right:before,
    .fa-repeat:before {
        content: ""
    }

    .fa-refresh:before {
        content: ""
    }

    .fa-list-alt:before {
        content: ""
    }

    .fa-lock:before {
        content: ""
    }

    .fa-flag:before {
        content: ""
    }

    .fa-headphones:before {
        content: ""
    }

    .fa-volume-off:before {
        content: ""
    }

    .fa-volume-down:before {
        content: ""
    }

    .fa-volume-up:before {
        content: ""
    }

    .fa-qrcode:before {
        content: ""
    }

    .fa-barcode:before {
        content: ""
    }

    .fa-tag:before {
        content: ""
    }

    .fa-tags:before {
        content: ""
    }

    .fa-book:before {
        content: ""
    }

    .fa-bookmark:before {
        content: ""
    }

    .fa-print:before {
        content: ""
    }

    .fa-camera:before {
        content: ""
    }

    .fa-font:before {
        content: ""
    }

    .fa-bold:before {
        content: ""
    }

    .fa-italic:before {
        content: ""
    }

    .fa-text-height:before {
        content: ""
    }

    .fa-text-width:before {
        content: ""
    }

    .fa-align-left:before {
        content: ""
    }

    .fa-align-center:before {
        content: ""
    }

    .fa-align-right:before {
        content: ""
    }

    .fa-align-justify:before {
        content: ""
    }

    .fa-list:before {
        content: ""
    }

    .fa-dedent:before,
    .fa-outdent:before {
        content: ""
    }

    .fa-indent:before {
        content: ""
    }

    .fa-video-camera:before {
        content: ""
    }

    .fa-photo:before,
    .fa-image:before,
    .fa-picture-o:before {
        content: ""
    }

    .fa-pencil:before {
        content: ""
    }

    .fa-map-marker:before {
        content: ""
    }

    .fa-adjust:before {
        content: ""
    }

    .fa-tint:before {
        content: ""
    }

    .fa-edit:before,
    .fa-pencil-square-o:before {
        content: ""
    }

    .fa-share-square-o:before {
        content: ""
    }

    .fa-check-square-o:before {
        content: ""
    }

    .fa-arrows:before {
        content: ""
    }

    .fa-step-backward:before {
        content: ""
    }

    .fa-fast-backward:before {
        content: ""
    }

    .fa-backward:before {
        content: ""
    }

    .fa-play:before {
        content: ""
    }

    .fa-pause:before {
        content: ""
    }

    .fa-stop:before {
        content: ""
    }

    .fa-forward:before {
        content: ""
    }

    .fa-fast-forward:before {
        content: ""
    }

    .fa-step-forward:before {
        content: ""
    }

    .fa-eject:before {
        content: ""
    }

    .fa-chevron-left:before {
        content: ""
    }

    .fa-chevron-right:before {
        content: ""
    }

    .fa-plus-circle:before {
        content: ""
    }

    .fa-minus-circle:before {
        content: ""
    }

    .fa-times-circle:before {
        content: ""
    }

    .fa-check-circle:before {
        content: ""
    }

    .fa-question-circle:before {
        content: ""
    }

    .fa-info-circle:before {
        content: ""
    }

    .fa-crosshairs:before {
        content: ""
    }

    .fa-times-circle-o:before {
        content: ""
    }

    .fa-check-circle-o:before {
        content: ""
    }

    .fa-ban:before {
        content: ""
    }

    .fa-arrow-left:before {
        content: ""
    }

    .fa-arrow-right:before {
        content: ""
    }

    .fa-arrow-up:before {
        content: ""
    }

    .fa-arrow-down:before {
        content: ""
    }

    .fa-mail-forward:before,
    .fa-share:before {
        content: ""
    }

    .fa-expand:before {
        content: ""
    }

    .fa-compress:before {
        content: ""
    }

    .fa-plus:before {
        content: ""
    }

    .fa-minus:before {
        content: ""
    }

    .fa-asterisk:before {
        content: ""
    }

    .fa-exclamation-circle:before {
        content: ""
    }

    .fa-gift:before {
        content: ""
    }

    .fa-leaf:before {
        content: ""
    }

    .fa-fire:before {
        content: ""
    }

    .fa-eye:before {
        content: ""
    }

    .fa-eye-slash:before {
        content: ""
    }

    .fa-warning:before,
    .fa-exclamation-triangle:before {
        content: ""
    }

    .fa-plane:before {
        content: ""
    }

    .fa-calendar:before {
        content: ""
    }

    .fa-random:before {
        content: ""
    }

    .fa-comment:before {
        content: ""
    }

    .fa-magnet:before {
        content: ""
    }

    .fa-chevron-up:before {
        content: ""
    }

    .fa-chevron-down:before {
        content: ""
    }

    .fa-retweet:before {
        content: ""
    }

    .fa-shopping-cart:before {
        content: ""
    }

    .fa-folder:before {
        content: ""
    }

    .fa-folder-open:before {
        content: ""
    }

    .fa-arrows-v:before {
        content: ""
    }

    .fa-arrows-h:before {
        content: ""
    }

    .fa-bar-chart-o:before,
    .fa-bar-chart:before {
        content: ""
    }

    .fa-twitter-square:before {
        content: ""
    }

    .fa-facebook-square:before {
        content: ""
    }

    .fa-camera-retro:before {
        content: ""
    }

    .fa-key:before {
        content: ""
    }

    .fa-gears:before,
    .fa-cogs:before {
        content: ""
    }

    .fa-comments:before {
        content: ""
    }

    .fa-thumbs-o-up:before {
        content: ""
    }

    .fa-thumbs-o-down:before {
        content: ""
    }

    .fa-star-half:before {
        content: ""
    }

    .fa-heart-o:before {
        content: ""
    }

    .fa-sign-out:before {
        content: ""
    }

    .fa-linkedin-square:before {
        content: ""
    }

    .fa-thumb-tack:before {
        content: ""
    }

    .fa-external-link:before {
        content: ""
    }

    .fa-sign-in:before {
        content: ""
    }

    .fa-trophy:before {
        content: ""
    }

    .fa-github-square:before {
        content: ""
    }

    .fa-upload:before {
        content: ""
    }

    .fa-lemon-o:before {
        content: ""
    }

    .fa-phone:before {
        content: ""
    }

    .fa-square-o:before {
        content: ""
    }

    .fa-bookmark-o:before {
        content: ""
    }

    .fa-phone-square:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook-f:before,
    .fa-facebook:before {
        content: ""
    }

    .fa-github:before {
        content: ""
    }

    .fa-unlock:before {
        content: ""
    }

    .fa-credit-card:before {
        content: ""
    }

    .fa-feed:before,
    .fa-rss:before {
        content: ""
    }

    .fa-hdd-o:before {
        content: ""
    }

    .fa-bullhorn:before {
        content: ""
    }

    .fa-bell:before {
        content: ""
    }

    .fa-certificate:before {
        content: ""
    }

    .fa-hand-o-right:before {
        content: ""
    }

    .fa-hand-o-left:before {
        content: ""
    }

    .fa-hand-o-up:before {
        content: ""
    }

    .fa-hand-o-down:before {
        content: ""
    }

    .fa-arrow-circle-left:before {
        content: ""
    }

    .fa-arrow-circle-right:before {
        content: ""
    }

    .fa-arrow-circle-up:before {
        content: ""
    }

    .fa-arrow-circle-down:before {
        content: ""
    }

    .fa-globe:before {
        content: ""
    }

    .fa-wrench:before {
        content: ""
    }

    .fa-tasks:before {
        content: ""
    }

    .fa-filter:before {
        content: ""
    }

    .fa-briefcase:before {
        content: ""
    }

    .fa-arrows-alt:before {
        content: ""
    }

    .fa-group:before,
    .fa-users:before {
        content: ""
    }

    .fa-chain:before,
    .fa-link:before {
        content: ""
    }

    .fa-cloud:before {
        content: ""
    }

    .fa-flask:before {
        content: ""
    }

    .fa-cut:before,
    .fa-scissors:before {
        content: ""
    }

    .fa-copy:before,
    .fa-files-o:before {
        content: ""
    }

    .fa-paperclip:before {
        content: ""
    }

    .fa-save:before,
    .fa-floppy-o:before {
        content: ""
    }

    .fa-square:before {
        content: ""
    }

    .fa-navicon:before,
    .fa-reorder:before,
    .fa-bars:before {
        content: ""
    }

    .fa-list-ul:before {
        content: ""
    }

    .fa-list-ol:before {
        content: ""
    }

    .fa-strikethrough:before {
        content: ""
    }

    .fa-underline:before {
        content: ""
    }

    .fa-table:before {
        content: ""
    }

    .fa-magic:before {
        content: ""
    }

    .fa-truck:before {
        content: ""
    }

    .fa-pinterest:before {
        content: ""
    }

    .fa-pinterest-square:before {
        content: ""
    }

    .fa-google-plus-square:before {
        content: ""
    }

    .fa-google-plus:before {
        content: ""
    }

    .fa-money:before {
        content: ""
    }

    .fa-caret-down:before {
        content: ""
    }

    .fa-caret-up:before {
        content: ""
    }

    .fa-caret-left:before {
        content: ""
    }

    .fa-caret-right:before {
        content: ""
    }

    .fa-columns:before {
        content: ""
    }

    .fa-unsorted:before,
    .fa-sort:before {
        content: ""
    }

    .fa-sort-down:before,
    .fa-sort-desc:before {
        content: ""
    }

    .fa-sort-up:before,
    .fa-sort-asc:before {
        content: ""
    }

    .fa-envelope:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-rotate-left:before,
    .fa-undo:before {
        content: ""
    }

    .fa-legal:before,
    .fa-gavel:before {
        content: ""
    }

    .fa-dashboard:before,
    .fa-tachometer:before {
        content: ""
    }

    .fa-comment-o:before {
        content: ""
    }

    .fa-comments-o:before {
        content: ""
    }

    .fa-flash:before,
    .fa-bolt:before {
        content: ""
    }

    .fa-sitemap:before {
        content: ""
    }

    .fa-umbrella:before {
        content: ""
    }

    .fa-paste:before,
    .fa-clipboard:before {
        content: ""
    }

    .fa-lightbulb-o:before {
        content: ""
    }

    .fa-exchange:before {
        content: ""
    }

    .fa-cloud-download:before {
        content: ""
    }

    .fa-cloud-upload:before {
        content: ""
    }

    .fa-user-md:before {
        content: ""
    }

    .fa-stethoscope:before {
        content: ""
    }

    .fa-suitcase:before {
        content: ""
    }

    .fa-bell-o:before {
        content: ""
    }

    .fa-coffee:before {
        content: ""
    }

    .fa-cutlery:before {
        content: ""
    }

    .fa-file-text-o:before {
        content: ""
    }

    .fa-building-o:before {
        content: ""
    }

    .fa-hospital-o:before {
        content: ""
    }

    .fa-ambulance:before {
        content: ""
    }

    .fa-medkit:before {
        content: ""
    }

    .fa-fighter-jet:before {
        content: ""
    }

    .fa-beer:before {
        content: ""
    }

    .fa-h-square:before {
        content: ""
    }

    .fa-plus-square:before {
        content: ""
    }

    .fa-angle-double-left:before {
        content: ""
    }

    .fa-angle-double-right:before {
        content: ""
    }

    .fa-angle-double-up:before {
        content: ""
    }

    .fa-angle-double-down:before {
        content: ""
    }

    .fa-angle-left:before {
        content: ""
    }

    .fa-angle-right:before {
        content: ""
    }

    .fa-angle-up:before {
        content: ""
    }

    .fa-angle-down:before {
        content: ""
    }

    .fa-desktop:before {
        content: ""
    }

    .fa-laptop:before {
        content: ""
    }

    .fa-tablet:before {
        content: ""
    }

    .fa-mobile-phone:before,
    .fa-mobile:before {
        content: ""
    }

    .fa-circle-o:before {
        content: ""
    }

    .fa-quote-left:before {
        content: ""
    }

    .fa-quote-right:before {
        content: ""
    }

    .fa-spinner:before {
        content: ""
    }

    .fa-circle:before {
        content: ""
    }

    .fa-mail-reply:before,
    .fa-reply:before {
        content: ""
    }

    .fa-github-alt:before {
        content: ""
    }

    .fa-folder-o:before {
        content: ""
    }

    .fa-folder-open-o:before {
        content: ""
    }

    .fa-smile-o:before {
        content: ""
    }

    .fa-frown-o:before {
        content: ""
    }

    .fa-meh-o:before {
        content: ""
    }

    .fa-gamepad:before {
        content: ""
    }

    .fa-keyboard-o:before {
        content: ""
    }

    .fa-flag-o:before {
        content: ""
    }

    .fa-flag-checkered:before {
        content: ""
    }

    .fa-terminal:before {
        content: ""
    }

    .fa-code:before {
        content: ""
    }

    .fa-mail-reply-all:before,
    .fa-reply-all:before {
        content: ""
    }

    .fa-star-half-empty:before,
    .fa-star-half-full:before,
    .fa-star-half-o:before {
        content: ""
    }

    .fa-location-arrow:before {
        content: ""
    }

    .fa-crop:before {
        content: ""
    }

    .fa-code-fork:before {
        content: ""
    }

    .fa-unlink:before,
    .fa-chain-broken:before {
        content: ""
    }

    .fa-question:before {
        content: ""
    }

    .fa-info:before {
        content: ""
    }

    .fa-exclamation:before {
        content: ""
    }

    .fa-superscript:before {
        content: ""
    }

    .fa-subscript:before {
        content: ""
    }

    .fa-eraser:before {
        content: ""
    }

    .fa-puzzle-piece:before {
        content: ""
    }

    .fa-microphone:before {
        content: ""
    }

    .fa-microphone-slash:before {
        content: ""
    }

    .fa-shield:before {
        content: ""
    }

    .fa-calendar-o:before {
        content: ""
    }

    .fa-fire-extinguisher:before {
        content: ""
    }

    .fa-rocket:before {
        content: ""
    }

    .fa-maxcdn:before {
        content: ""
    }

    .fa-chevron-circle-left:before {
        content: ""
    }

    .fa-chevron-circle-right:before {
        content: ""
    }

    .fa-chevron-circle-up:before {
        content: ""
    }

    .fa-chevron-circle-down:before {
        content: ""
    }

    .fa-html5:before {
        content: ""
    }

    .fa-css3:before {
        content: ""
    }

    .fa-anchor:before {
        content: ""
    }

    .fa-unlock-alt:before {
        content: ""
    }

    .fa-bullseye:before {
        content: ""
    }

    .fa-ellipsis-h:before {
        content: ""
    }

    .fa-ellipsis-v:before {
        content: ""
    }

    .fa-rss-square:before {
        content: ""
    }

    .fa-play-circle:before {
        content: ""
    }

    .fa-ticket:before {
        content: ""
    }

    .fa-minus-square:before {
        content: ""
    }

    .fa-minus-square-o:before {
        content: ""
    }

    .fa-level-up:before {
        content: ""
    }

    .fa-level-down:before {
        content: ""
    }

    .fa-check-square:before {
        content: ""
    }

    .fa-pencil-square:before {
        content: ""
    }

    .fa-external-link-square:before {
        content: ""
    }

    .fa-share-square:before {
        content: ""
    }

    .fa-compass:before {
        content: ""
    }

    .fa-toggle-down:before,
    .fa-caret-square-o-down:before {
        content: ""
    }

    .fa-toggle-up:before,
    .fa-caret-square-o-up:before {
        content: ""
    }

    .fa-toggle-right:before,
    .fa-caret-square-o-right:before {
        content: ""
    }

    .fa-euro:before,
    .fa-eur:before {
        content: ""
    }

    .fa-gbp:before {
        content: ""
    }

    .fa-dollar:before,
    .fa-usd:before {
        content: ""
    }

    .fa-rupee:before,
    .fa-inr:before {
        content: ""
    }

    .fa-cny:before,
    .fa-rmb:before,
    .fa-yen:before,
    .fa-jpy:before {
        content: ""
    }

    .fa-ruble:before,
    .fa-rouble:before,
    .fa-rub:before {
        content: ""
    }

    .fa-won:before,
    .fa-krw:before {
        content: ""
    }

    .fa-bitcoin:before,
    .fa-btc:before {
        content: ""
    }

    .fa-file:before {
        content: ""
    }

    .fa-file-text:before {
        content: ""
    }

    .fa-sort-alpha-asc:before {
        content: ""
    }

    .fa-sort-alpha-desc:before {
        content: ""
    }

    .fa-sort-amount-asc:before {
        content: ""
    }

    .fa-sort-amount-desc:before {
        content: ""
    }

    .fa-sort-numeric-asc:before {
        content: ""
    }

    .fa-sort-numeric-desc:before {
        content: ""
    }

    .fa-thumbs-up:before {
        content: ""
    }

    .fa-thumbs-down:before {
        content: ""
    }

    .fa-youtube-square:before {
        content: ""
    }

    .fa-youtube:before {
        content: ""
    }

    .fa-xing:before {
        content: ""
    }

    .fa-xing-square:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-dropbox:before {
        content: ""
    }

    .fa-stack-overflow:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    .fa-flickr:before {
        content: ""
    }

    .fa-adn:before {
        content: ""
    }

    .fa-bitbucket:before {
        content: ""
    }

    .fa-bitbucket-square:before {
        content: ""
    }

    .fa-tumblr:before {
        content: ""
    }

    .fa-tumblr-square:before {
        content: ""
    }

    .fa-long-arrow-down:before {
        content: ""
    }

    .fa-long-arrow-up:before {
        content: ""
    }

    .fa-long-arrow-left:before {
        content: ""
    }

    .fa-long-arrow-right:before {
        content: ""
    }

    .fa-apple:before {
        content: ""
    }

    .fa-windows:before {
        content: ""
    }

    .fa-android:before {
        content: ""
    }

    .fa-linux:before {
        content: ""
    }

    .fa-dribbble:before {
        content: ""
    }

    .fa-skype:before {
        content: ""
    }

    .fa-foursquare:before {
        content: ""
    }

    .fa-trello:before {
        content: ""
    }

    .fa-female:before {
        content: ""
    }

    .fa-male:before {
        content: ""
    }

    .fa-gittip:before,
    .fa-gratipay:before {
        content: ""
    }

    .fa-sun-o:before {
        content: ""
    }

    .fa-moon-o:before {
        content: ""
    }

    .fa-archive:before {
        content: ""
    }

    .fa-bug:before {
        content: ""
    }

    .fa-vk:before {
        content: ""
    }

    .fa-weibo:before {
        content: ""
    }

    .fa-renren:before {
        content: ""
    }

    .fa-pagelines:before {
        content: ""
    }

    .fa-stack-exchange:before {
        content: ""
    }

    .fa-arrow-circle-o-right:before {
        content: ""
    }

    .fa-arrow-circle-o-left:before {
        content: ""
    }

    .fa-toggle-left:before,
    .fa-caret-square-o-left:before {
        content: ""
    }

    .fa-dot-circle-o:before {
        content: ""
    }

    .fa-wheelchair:before {
        content: ""
    }

    .fa-vimeo-square:before {
        content: ""
    }

    .fa-turkish-lira:before,
    .fa-try:before {
        content: ""
    }

    .fa-plus-square-o:before {
        content: ""
    }

    .fa-space-shuttle:before {
        content: ""
    }

    .fa-slack:before {
        content: ""
    }

    .fa-envelope-square:before {
        content: ""
    }

    .fa-wordpress:before {
        content: ""
    }

    .fa-openid:before {
        content: ""
    }

    .fa-institution:before,
    .fa-bank:before,
    .fa-university:before {
        content: ""
    }

    .fa-mortar-board:before,
    .fa-graduation-cap:before {
        content: ""
    }

    .fa-yahoo:before {
        content: ""
    }

    .fa-google:before {
        content: ""
    }

    .fa-reddit:before {
        content: ""
    }

    .fa-reddit-square:before {
        content: ""
    }

    .fa-stumbleupon-circle:before {
        content: ""
    }

    .fa-stumbleupon:before {
        content: ""
    }

    .fa-delicious:before {
        content: ""
    }

    .fa-digg:before {
        content: ""
    }

    .fa-pied-piper-pp:before {
        content: ""
    }

    .fa-pied-piper-alt:before {
        content: ""
    }

    .fa-drupal:before {
        content: ""
    }

    .fa-joomla:before {
        content: ""
    }

    .fa-language:before {
        content: ""
    }

    .fa-fax:before {
        content: ""
    }

    .fa-building:before {
        content: ""
    }

    .fa-child:before {
        content: ""
    }

    .fa-paw:before {
        content: ""
    }

    .fa-spoon:before {
        content: ""
    }

    .fa-cube:before {
        content: ""
    }

    .fa-cubes:before {
        content: ""
    }

    .fa-behance:before {
        content: ""
    }

    .fa-behance-square:before {
        content: ""
    }

    .fa-steam:before {
        content: ""
    }

    .fa-steam-square:before {
        content: ""
    }

    .fa-recycle:before {
        content: ""
    }

    .fa-automobile:before,
    .fa-car:before {
        content: ""
    }

    .fa-cab:before,
    .fa-taxi:before {
        content: ""
    }

    .fa-tree:before {
        content: ""
    }

    .fa-spotify:before {
        content: ""
    }

    .fa-deviantart:before {
        content: ""
    }

    .fa-soundcloud:before {
        content: ""
    }

    .fa-database:before {
        content: ""
    }

    .fa-file-pdf-o:before {
        content: ""
    }

    .fa-file-word-o:before {
        content: ""
    }

    .fa-file-excel-o:before {
        content: ""
    }

    .fa-file-powerpoint-o:before {
        content: ""
    }

    .fa-file-photo-o:before,
    .fa-file-picture-o:before,
    .fa-file-image-o:before {
        content: ""
    }

    .fa-file-zip-o:before,
    .fa-file-archive-o:before {
        content: ""
    }

    .fa-file-sound-o:before,
    .fa-file-audio-o:before {
        content: ""
    }

    .fa-file-movie-o:before,
    .fa-file-video-o:before {
        content: ""
    }

    .fa-file-code-o:before {
        content: ""
    }

    .fa-vine:before {
        content: ""
    }

    .fa-codepen:before {
        content: ""
    }

    .fa-jsfiddle:before {
        content: ""
    }

    .fa-life-bouy:before,
    .fa-life-buoy:before,
    .fa-life-saver:before,
    .fa-support:before,
    .fa-life-ring:before {
        content: ""
    }

    .fa-circle-o-notch:before {
        content: ""
    }

    .fa-ra:before,
    .fa-resistance:before,
    .fa-rebel:before {
        content: ""
    }

    .fa-ge:before,
    .fa-empire:before {
        content: ""
    }

    .fa-git-square:before {
        content: ""
    }

    .fa-git:before {
        content: ""
    }

    .fa-y-combinator-square:before,
    .fa-yc-square:before,
    .fa-hacker-news:before {
        content: ""
    }

    .fa-tencent-weibo:before {
        content: ""
    }

    .fa-qq:before {
        content: ""
    }

    .fa-wechat:before,
    .fa-weixin:before {
        content: ""
    }

    .fa-send:before,
    .fa-paper-plane:before {
        content: ""
    }

    .fa-send-o:before,
    .fa-paper-plane-o:before {
        content: ""
    }

    .fa-history:before {
        content: ""
    }

    .fa-circle-thin:before {
        content: ""
    }

    .fa-header:before {
        content: ""
    }

    .fa-paragraph:before {
        content: ""
    }

    .fa-sliders:before {
        content: ""
    }

    .fa-share-alt:before {
        content: ""
    }

    .fa-share-alt-square:before {
        content: ""
    }

    .fa-bomb:before {
        content: ""
    }

    .fa-soccer-ball-o:before,
    .fa-futbol-o:before {
        content: ""
    }

    .fa-tty:before {
        content: ""
    }

    .fa-binoculars:before {
        content: ""
    }

    .fa-plug:before {
        content: ""
    }

    .fa-slideshare:before {
        content: ""
    }

    .fa-twitch:before {
        content: ""
    }

    .fa-yelp:before {
        content: ""
    }

    .fa-newspaper-o:before {
        content: ""
    }

    .fa-wifi:before {
        content: ""
    }

    .fa-calculator:before {
        content: ""
    }

    .fa-paypal:before {
        content: ""
    }

    .fa-google-wallet:before {
        content: ""
    }

    .fa-cc-visa:before {
        content: ""
    }

    .fa-cc-mastercard:before {
        content: ""
    }

    .fa-cc-discover:before {
        content: ""
    }

    .fa-cc-amex:before {
        content: ""
    }

    .fa-cc-paypal:before {
        content: ""
    }

    .fa-cc-stripe:before {
        content: ""
    }

    .fa-bell-slash:before {
        content: ""
    }

    .fa-bell-slash-o:before {
        content: ""
    }

    .fa-trash:before {
        content: ""
    }

    .fa-copyright:before {
        content: ""
    }

    .fa-at:before {
        content: ""
    }

    .fa-eyedropper:before {
        content: ""
    }

    .fa-paint-brush:before {
        content: ""
    }

    .fa-birthday-cake:before {
        content: ""
    }

    .fa-area-chart:before {
        content: ""
    }

    .fa-pie-chart:before {
        content: ""
    }

    .fa-line-chart:before {
        content: ""
    }

    .fa-lastfm:before {
        content: ""
    }

    .fa-lastfm-square:before {
        content: ""
    }

    .fa-toggle-off:before {
        content: ""
    }

    .fa-toggle-on:before {
        content: ""
    }

    .fa-bicycle:before {
        content: ""
    }

    .fa-bus:before {
        content: ""
    }

    .fa-ioxhost:before {
        content: ""
    }

    .fa-angellist:before {
        content: ""
    }

    .fa-cc:before {
        content: ""
    }

    .fa-shekel:before,
    .fa-sheqel:before,
    .fa-ils:before {
        content: ""
    }

    .fa-meanpath:before {
        content: ""
    }

    .fa-buysellads:before {
        content: ""
    }

    .fa-connectdevelop:before {
        content: ""
    }

    .fa-dashcube:before {
        content: ""
    }

    .fa-forumbee:before {
        content: ""
    }

    .fa-leanpub:before {
        content: ""
    }

    .fa-sellsy:before {
        content: ""
    }

    .fa-shirtsinbulk:before {
        content: ""
    }

    .fa-simplybuilt:before {
        content: ""
    }

    .fa-skyatlas:before {
        content: ""
    }

    .fa-cart-plus:before {
        content: ""
    }

    .fa-cart-arrow-down:before {
        content: ""
    }

    .fa-diamond:before {
        content: ""
    }

    .fa-ship:before {
        content: ""
    }

    .fa-user-secret:before {
        content: ""
    }

    .fa-motorcycle:before {
        content: ""
    }

    .fa-street-view:before {
        content: ""
    }

    .fa-heartbeat:before {
        content: ""
    }

    .fa-venus:before {
        content: ""
    }

    .fa-mars:before {
        content: ""
    }

    .fa-mercury:before {
        content: ""
    }

    .fa-intersex:before,
    .fa-transgender:before {
        content: ""
    }

    .fa-transgender-alt:before {
        content: ""
    }

    .fa-venus-double:before {
        content: ""
    }

    .fa-mars-double:before {
        content: ""
    }

    .fa-venus-mars:before {
        content: ""
    }

    .fa-mars-stroke:before {
        content: ""
    }

    .fa-mars-stroke-v:before {
        content: ""
    }

    .fa-mars-stroke-h:before {
        content: ""
    }

    .fa-neuter:before {
        content: ""
    }

    .fa-genderless:before {
        content: ""
    }

    .fa-facebook-official:before {
        content: ""
    }

    .fa-pinterest-p:before {
        content: ""
    }

    .fa-whatsapp:before {
        content: ""
    }

    .fa-server:before {
        content: ""
    }

    .fa-user-plus:before {
        content: ""
    }

    .fa-user-times:before {
        content: ""
    }

    .fa-hotel:before,
    .fa-bed:before {
        content: ""
    }

    .fa-viacoin:before {
        content: ""
    }

    .fa-train:before {
        content: ""
    }

    .fa-subway:before {
        content: ""
    }

    .fa-medium:before {
        content: ""
    }

    .fa-yc:before,
    .fa-y-combinator:before {
        content: ""
    }

    .fa-optin-monster:before {
        content: ""
    }

    .fa-opencart:before {
        content: ""
    }

    .fa-expeditedssl:before {
        content: ""
    }

    .fa-battery-4:before,
    .fa-battery:before,
    .fa-battery-full:before {
        content: ""
    }

    .fa-battery-3:before,
    .fa-battery-three-quarters:before {
        content: ""
    }

    .fa-battery-2:before,
    .fa-battery-half:before {
        content: ""
    }

    .fa-battery-1:before,
    .fa-battery-quarter:before {
        content: ""
    }

    .fa-battery-0:before,
    .fa-battery-empty:before {
        content: ""
    }

    .fa-mouse-pointer:before {
        content: ""
    }

    .fa-i-cursor:before {
        content: ""
    }

    .fa-object-group:before {
        content: ""
    }

    .fa-object-ungroup:before {
        content: ""
    }

    .fa-sticky-note:before {
        content: ""
    }

    .fa-sticky-note-o:before {
        content: ""
    }

    .fa-cc-jcb:before {
        content: ""
    }

    .fa-cc-diners-club:before {
        content: ""
    }

    .fa-clone:before {
        content: ""
    }

    .fa-balance-scale:before {
        content: ""
    }

    .fa-hourglass-o:before {
        content: ""
    }

    .fa-hourglass-1:before,
    .fa-hourglass-start:before {
        content: ""
    }

    .fa-hourglass-2:before,
    .fa-hourglass-half:before {
        content: ""
    }

    .fa-hourglass-3:before,
    .fa-hourglass-end:before {
        content: ""
    }

    .fa-hourglass:before {
        content: ""
    }

    .fa-hand-grab-o:before,
    .fa-hand-rock-o:before {
        content: ""
    }

    .fa-hand-stop-o:before,
    .fa-hand-paper-o:before {
        content: ""
    }

    .fa-hand-scissors-o:before {
        content: ""
    }

    .fa-hand-lizard-o:before {
        content: ""
    }

    .fa-hand-spock-o:before {
        content: ""
    }

    .fa-hand-pointer-o:before {
        content: ""
    }

    .fa-hand-peace-o:before {
        content: ""
    }

    .fa-trademark:before {
        content: ""
    }

    .fa-registered:before {
        content: ""
    }

    .fa-creative-commons:before {
        content: ""
    }

    .fa-gg:before {
        content: ""
    }

    .fa-gg-circle:before {
        content: ""
    }

    .fa-tripadvisor:before {
        content: ""
    }

    .fa-odnoklassniki:before {
        content: ""
    }

    .fa-odnoklassniki-square:before {
        content: ""
    }

    .fa-get-pocket:before {
        content: ""
    }

    .fa-wikipedia-w:before {
        content: ""
    }

    .fa-safari:before {
        content: ""
    }

    .fa-chrome:before {
        content: ""
    }

    .fa-firefox:before {
        content: ""
    }

    .fa-opera:before {
        content: ""
    }

    .fa-internet-explorer:before {
        content: ""
    }

    .fa-tv:before,
    .fa-television:before {
        content: ""
    }

    .fa-contao:before {
        content: ""
    }

    .fa-500px:before {
        content: ""
    }

    .fa-amazon:before {
        content: ""
    }

    .fa-calendar-plus-o:before {
        content: ""
    }

    .fa-calendar-minus-o:before {
        content: ""
    }

    .fa-calendar-times-o:before {
        content: ""
    }

    .fa-calendar-check-o:before {
        content: ""
    }

    .fa-industry:before {
        content: ""
    }

    .fa-map-pin:before {
        content: ""
    }

    .fa-map-signs:before {
        content: ""
    }

    .fa-map-o:before {
        content: ""
    }

    .fa-map:before {
        content: ""
    }

    .fa-commenting:before {
        content: ""
    }

    .fa-commenting-o:before {
        content: ""
    }

    .fa-houzz:before {
        content: ""
    }

    .fa-vimeo:before {
        content: ""
    }

    .fa-black-tie:before {
        content: ""
    }

    .fa-fonticons:before {
        content: ""
    }

    .fa-reddit-alien:before {
        content: ""
    }

    .fa-edge:before {
        content: ""
    }

    .fa-credit-card-alt:before {
        content: ""
    }

    .fa-codiepie:before {
        content: ""
    }

    .fa-modx:before {
        content: ""
    }

    .fa-fort-awesome:before {
        content: ""
    }

    .fa-usb:before {
        content: ""
    }

    .fa-product-hunt:before {
        content: ""
    }

    .fa-mixcloud:before {
        content: ""
    }

    .fa-scribd:before {
        content: ""
    }

    .fa-pause-circle:before {
        content: ""
    }

    .fa-pause-circle-o:before {
        content: ""
    }

    .fa-stop-circle:before {
        content: ""
    }

    .fa-stop-circle-o:before {
        content: ""
    }

    .fa-shopping-bag:before {
        content: ""
    }

    .fa-shopping-basket:before {
        content: ""
    }

    .fa-hashtag:before {
        content: ""
    }

    .fa-bluetooth:before {
        content: ""
    }

    .fa-bluetooth-b:before {
        content: ""
    }

    .fa-percent:before {
        content: ""
    }

    .fa-gitlab:before {
        content: ""
    }

    .fa-wpbeginner:before {
        content: ""
    }

    .fa-wpforms:before {
        content: ""
    }

    .fa-envira:before {
        content: ""
    }

    .fa-universal-access:before {
        content: ""
    }

    .fa-wheelchair-alt:before {
        content: ""
    }

    .fa-question-circle-o:before {
        content: ""
    }

    .fa-blind:before {
        content: ""
    }

    .fa-audio-description:before {
        content: ""
    }

    .fa-volume-control-phone:before {
        content: ""
    }

    .fa-braille:before {
        content: ""
    }

    .fa-assistive-listening-systems:before {
        content: ""
    }

    .fa-asl-interpreting:before,
    .fa-american-sign-language-interpreting:before {
        content: ""
    }

    .fa-deafness:before,
    .fa-hard-of-hearing:before,
    .fa-deaf:before {
        content: ""
    }

    .fa-glide:before {
        content: ""
    }

    .fa-glide-g:before {
        content: ""
    }

    .fa-signing:before,
    .fa-sign-language:before {
        content: ""
    }

    .fa-low-vision:before {
        content: ""
    }

    .fa-viadeo:before {
        content: ""
    }

    .fa-viadeo-square:before {
        content: ""
    }

    .fa-snapchat:before {
        content: ""
    }

    .fa-snapchat-ghost:before {
        content: ""
    }

    .fa-snapchat-square:before {
        content: ""
    }

    .fa-pied-piper:before {
        content: ""
    }

    .fa-first-order:before {
        content: ""
    }

    .fa-yoast:before {
        content: ""
    }

    .fa-themeisle:before {
        content: ""
    }

    .fa-google-plus-circle:before,
    .fa-google-plus-official:before {
        content: ""
    }

    .fa-fa:before,
    .fa-font-awesome:before {
        content: ""
    }

    .fa-handshake-o:before {
        content: ""
    }

    .fa-envelope-open:before {
        content: ""
    }

    .fa-envelope-open-o:before {
        content: ""
    }

    .fa-linode:before {
        content: ""
    }

    .fa-address-book:before {
        content: ""
    }

    .fa-address-book-o:before {
        content: ""
    }

    .fa-vcard:before,
    .fa-address-card:before {
        content: ""
    }

    .fa-vcard-o:before,
    .fa-address-card-o:before {
        content: ""
    }

    .fa-user-circle:before {
        content: ""
    }

    .fa-user-circle-o:before {
        content: ""
    }

    .fa-user-o:before {
        content: ""
    }

    .fa-id-badge:before {
        content: ""
    }

    .fa-drivers-license:before,
    .fa-id-card:before {
        content: ""
    }

    .fa-drivers-license-o:before,
    .fa-id-card-o:before {
        content: ""
    }

    .fa-quora:before {
        content: ""
    }

    .fa-free-code-camp:before {
        content: ""
    }

    .fa-telegram:before {
        content: ""
    }

    .fa-thermometer-4:before,
    .fa-thermometer:before,
    .fa-thermometer-full:before {
        content: ""
    }

    .fa-thermometer-3:before,
    .fa-thermometer-three-quarters:before {
        content: ""
    }

    .fa-thermometer-2:before,
    .fa-thermometer-half:before {
        content: ""
    }

    .fa-thermometer-1:before,
    .fa-thermometer-quarter:before {
        content: ""
    }

    .fa-thermometer-0:before,
    .fa-thermometer-empty:before {
        content: ""
    }

    .fa-shower:before {
        content: ""
    }

    .fa-bathtub:before,
    .fa-s15:before,
    .fa-bath:before {
        content: ""
    }

    .fa-podcast:before {
        content: ""
    }

    .fa-window-maximize:before {
        content: ""
    }

    .fa-window-minimize:before {
        content: ""
    }

    .fa-window-restore:before {
        content: ""
    }

    .fa-times-rectangle:before,
    .fa-window-close:before {
        content: ""
    }

    .fa-times-rectangle-o:before,
    .fa-window-close-o:before {
        content: ""
    }

    .fa-bandcamp:before {
        content: ""
    }

    .fa-grav:before {
        content: ""
    }

    .fa-etsy:before {
        content: ""
    }

    .fa-imdb:before {
        content: ""
    }

    .fa-ravelry:before {
        content: ""
    }

    .fa-eercast:before {
        content: ""
    }

    .fa-microchip:before {
        content: ""
    }

    .fa-snowflake-o:before {
        content: ""
    }

    .fa-superpowers:before {
        content: ""
    }

    .fa-wpexplorer:before {
        content: ""
    }

    .fa-meetup:before {
        content: ""
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    @font-face {
        font-family: icomoon;
        src: url(/du-lich/content/fonts/icomoon.eot?fz97ry);
        src: url(/du-lich/content/fonts/icomoon.eot?fz97ry#iefix) format('embedded-opentype'), url(/du-lich/content/fonts/icomoon.ttf?fz97ry) format('truetype'), url(/du-lich/content/fonts/icomoon.woff?fz97ry) format('woff'), url(/du-lich/content/fonts/icomoon.svg?fz97ry#icomoon) format('svg');
        font-weight: 400;
        font-style: normal
    }

    [class*=" ico-"],
    [class^=ico-] {
        font-family: icomoon !important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .ico-1:before {
        content: "";
        color: #bdbdbd
    }

    .ico-uniE901:before {
        content: "";
        color: #003c71
    }

    .ico-uniE902:before {
        content: "";
        color: #003c71
    }

    .ico-2:before {
        content: "";
        color: #003c71
    }

    .ico-ic_date:before {
        content: "";
        color: #828282
    }

    .ico-ic_departure:before {
        content: "";
        color: #828282
    }

    .ico-ic_location:before {
        content: "";
        color: #828282
    }

    .ico-ic_people:before {
        content: "";
        color: #828282
    }

    .ico-v:before {
        content: "";
        color: #003c71
    }



    @charset "UTF-8";

    @font-face {
        font-family: "userdashboard";
        src: url(/du-lich/content/fonts/userdashboard/userdashboard.eot?cq16l7);
        src: url(/du-lich/content/fonts/userdashboard/userdashboard.eot?cq16l7#iefix) format("embedded-opentype"), url(/du-lich/content/fonts/userdashboard/userdashboard.ttf?cq16l7) format("truetype"), url(/du-lich/content/fonts/userdashboard/userdashboard.woff?cq16l7) format("woff"), url(/du-lich/content/fonts/userdashboard/userdashboard.svg?cq16l7#userdashboard) format("svg");
        font-weight: normal;
        font-style: normal
    }

    [class^=icon-ic_ivivu],
    [class*=" icon-ic_ivivu"] {
        font-family: "userdashboard" !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-ic_ivivu_clear:before {
        content: ""
    }

    .icon-ic_ivivu_cloudy:before {
        content: ""
    }

    .icon-ic_ivivu_foggy:before {
        content: ""
    }

    .icon-ic_ivivu_mostlysunny:before {
        content: ""
    }

    .icon-ic_ivivu_partlycloudy:before {
        content: ""
    }

    .icon-ic_ivivu_partlysunny:before {
        content: ""
    }

    .icon-ic_ivivu_rain:before {
        content: ""
    }

    .icon-ic_ivivu_rainshowers:before {
        content: ""
    }

    .icon-ic_ivivu_sleet:before {
        content: ""
    }

    .icon-ic_ivivu_sunny:before {
        content: ""
    }

    .icon-ic_ivivu_tstorms:before {
        content: ""
    }

    .icon-ic_ivivu_user_bed:before {
        content: ""
    }

    .icon-ic_ivivu_user_birthcer:before {
        content: ""
    }

    .icon-ic_ivivu_user_check:before {
        content: ""
    }

    .icon-ic_ivivu_user_checkin:before {
        content: ""
    }

    .icon-ic_ivivu_user_checkout:before {
        content: ""
    }

    .icon-ic_ivivu_user_close:before {
        content: ""
    }

    .icon-ic_ivivu_user_facebook:before {
        content: ""
    }

    .icon-ic_ivivu_user_google:before {
        content: ""
    }

    .icon-ic_ivivu_user_idcard:before {
        content: ""
    }

    .icon-ic_ivivu_user_info:before {
        content: ""
    }

    .icon-ic_ivivu_user_infor:before {
        content: ""
    }

    .icon-ic_ivivu_user_location:before {
        content: ""
    }

    .icon-ic_ivivu_user_money:before {
        content: ""
    }

    .icon-ic_ivivu_user_passport:before {
        content: ""
    }

    .icon-ic_ivivu_user_people:before {
        content: ""
    }

    .icon-ic_ivivu_user_phone:before {
        content: ""
    }

    .icon-ic_ivivu_user_plane:before {
        content: ""
    }

    .icon-ic_ivivu_user_radio_chosen:before {
        content: ""
    }

    .icon-ic_ivivu_user_radio:before {
        content: ""
    }

    .icon-ic_ivivu_user_star:before {
        content: ""
    }

    .filter-icon {
        display: inline-block;
        min-width: 18px;
        margin-bottom: 0 !important
    }

    .md-checkbox {
        position: relative;
        display: flex;
        align-items: center
    }

    @media only screen and (min-width:320px) {
        .md-checkbox {
            margin: 15px 0
        }
    }

    @media only screen and (min-width:480px) {
        .md-checkbox {
            margin: 10px 0
        }
    }

    @media only screen and (min-width:768px) {
        .md-checkbox {
            margin: 5px 0
        }
    }

    .md-checkbox:hover label {
        color: #2574a9
    }

    .md-checkbox:hover label:before {
        border-color: #2574a9
    }

    .md-checkbox label {
        font-size: 14px;
        transition: all .3s ease;
        margin-bottom: 0;
        width: 100%;
        cursor: pointer;
        white-space: nowrap;
        overflow: hidden !important;
        text-overflow: ellipsis;
        font-weight: 400;
        margin-top: 1px
    }

    .md-checkbox label:before,
    .md-checkbox label:after {
        content: "";
        position: absolute;
        left: 0;
        top: 3px
    }

    .md-checkbox label:before {
        width: 16px;
        height: 16px;
        background: transparent;
        border: 1px solid rgba(71, 89, 147, .3);
        border-radius: 3px;
        cursor: pointer;
        transition: all .3s
    }

    .md-checkbox input[type=checkbox] {
        outline: 0;
        margin-right: 15px;
        visibility: hidden
    }

    .md-checkbox input[type=checkbox]:checked+label:after {
        transform: rotate(-45deg);
        top: 7px;
        left: 2px;
        width: 12px;
        height: 6px;
        border: 2px solid #2574a9;
        border-top-style: none;
        border-right-style: none
    }

    .md-checkbox input[type=checkbox]:disabled+label:before {
        border-color: rgba(0, 0, 0, .26)
    }

    .md-checkbox input[type=checkbox]:disabled:checked+label:before {
        background: rgba(0, 0, 0, .26)
    }

    @media screen and (min-width:500px) {

        .modal-dialog,
        #RegisterModal .modal-dialog,
        #GetUserModal .modal-dialog,
        #UserSuccessModal .modal-dialog,
        #GetSocialModal .modal-dialog {
            width: 320px
        }
    }

    .input-lg,
    #RegisterModal .input-lg,
    #GetUserModal .input-lg,
    #UserSuccessModal .input-lg,
    #GetSocialModal .input-lg {
        border-radius: 4px
    }

    .btn-login,
    #RegisterModal .btn-login,
    #GetUserModal .btn-login,
    #UserSuccessModal .btn-login,
    #GetSocialModal .btn-login {
        border: 1px solid #003c71 !important;
        border-radius: 4px !important;
        background-color: #fff !important;
        transition: all .5s;
        color: #003c71 !important;
        box-shadow: unset !important;
        font-size: 14px !important
    }

    .btn-login:hover,
    .btn-login.active,
    #RegisterModal .btn-login:hover,
    #RegisterModal .btn-login.active,
    #GetUserModal .btn-login:hover,
    #GetUserModal .btn-login.active,
    #UserSuccessModal .btn-login:hover,
    #UserSuccessModal .btn-login.active,
    #GetSocialModal .btn-login:hover,
    #GetSocialModal .btn-login.active {
        border: 1px solid #26bed6 !important;
        color: #26bed6 !important
    }

    .btn-solid,
    #RegisterModal .btn-solid,
    #GetUserModal .btn-solid,
    #UserSuccessModal .btn-solid,
    #GetSocialModal .btn-solid {
        color: #fff !important;
        background-color: #003c71 !important;
        border: unset
    }

    .btn-solid:hover,
    .btn-solid.active,
    #RegisterModal .btn-solid:hover,
    #RegisterModal .btn-solid.active,
    #GetUserModal .btn-solid:hover,
    #GetUserModal .btn-solid.active,
    #UserSuccessModal .btn-solid:hover,
    #UserSuccessModal .btn-solid.active,
    #GetSocialModal .btn-solid:hover,
    #GetSocialModal .btn-solid.active {
        border: unset;
        background-color: #26bed6 !important;
        color: #fff !important
    }

    .btn-login,
    #RegisterModal .btn-login,
    #GetUserModal .btn-login,
    #UserSuccessModal .btn-login,
    #GetSocialModal .btn-login {
        font-weight: 500;
        border-radius: 2px;
        font-size: 16px;
        padding: 12px 10px;
        margin-bottom: 15px
    }

    .login-form .form-group .control-label,
    #RegisterModal .login-form .form-group .control-label,
    #GetUserModal .login-form .form-group .control-label,
    #UserSuccessModal .login-form .form-group .control-label,
    #GetSocialModal .login-form .form-group .control-label {
        font-weight: normal;
        color: #818180
    }

    .login-form .form-group .form-control,
    #RegisterModal .login-form .form-group .form-control,
    #GetUserModal .login-form .form-group .form-control,
    #UserSuccessModal .login-form .form-group .form-control,
    #GetSocialModal .login-form .form-group .form-control {
        font-size: 16px
    }

    #GetUserModal .img-user,
    #UserSuccessModal .img-user,
    #GetSocialModal .img-user {
        text-align: center;
        padding-top: 12px;
        padding-bottom: 12px
    }

    .md-checkbox label,
    #RegisterModal .md-checkbox label {
        cursor: unset;
        white-space: unset
    }

    .md-checkbox:hover label,
    #RegisterModal .md-checkbox:hover label {
        color: unset
    }

    .first-text,
    #RegisterModal .first-text {
        color: #003c71;
        text-align: center;
        padding-top: 16px;
        padding-bottom: 5px;
        font-weight: bold
    }

    .login-social .btn-social,
    #RegisterModal .login-social .btn-social {
        color: #818180;
        font-weight: 500;
        border-radius: 4px;
        font-size: 14px;
        text-align: left;
        padding: 5px 10px;
        padding-top: 7px;
        color: #fff
    }

    .login-social .btn-social i,
    #RegisterModal .login-social .btn-social i {
        margin-right: 5px;
        font-size: 25px;
        vertical-align: middle;
        padding-right: 20px
    }

    .login-social .btn-social i:after,
    #RegisterModal .login-social .btn-social i:after {
        content: "";
        position: absolute;
        top: 5px;
        left: 56px;
        width: 1px;
        height: 28px;
        background: rgba(255, 255, 255, .3)
    }

    .login-social .btn-social.btn-facebook,
    #RegisterModal .login-social .btn-social.btn-facebook {
        border: 1px solid rgba(71, 89, 147, .5);
        background-color: #475993
    }

    .login-social .btn-social.btn-facebook:hover,
    #RegisterModal .login-social .btn-social.btn-facebook:hover {
        background-color: #3a4877
    }

    .login-social .btn-social.btn-facebook i,
    #RegisterModal .login-social .btn-social.btn-facebook i {
        padding-left: 4px;
        padding-right: 16px
    }

    .login-social .btn-social.btn-google,
    #RegisterModal .login-social .btn-social.btn-google {
        border: 1px solid rgba(243, 74, 56, .5);
        background-color: #f34a38
    }

    .login-social .btn-social.btn-google:hover,
    #RegisterModal .login-social .btn-social.btn-google:hover {
        background-color: #f12712
    }

    @media only screen and (min-width:320px) {

        .separate,
        #RegisterModal .separate {
            margin: 10px 0 25px 0
        }
    }

    @media only screen and (min-width:480px) {

        .separate,
        #RegisterModal .separate {
            margin: 10px 0 20px 0
        }
    }

    .separate__inner,
    #RegisterModal .separate__inner {
        width: 100%;
        height: 20px;
        border-bottom: 1px solid rgba(71, 89, 147, .2);
        text-align: center
    }

    .separate__text,
    #RegisterModal .separate__text {
        color: #818180;
        background-color: #fff;
        padding: 0 10px;
        position: relative;
        top: 8px
    }

    @font-face {
        font-family: "vvcon";
        src: url(/du-lich/content/fonts/new-vivu-font/vvcon.eot?9eqgt0);
        src: url(/du-lich/content/fonts/new-vivu-font/vvcon.eot?9eqgt0#iefix) format("embedded-opentype"), url(/du-lich/content/fonts/new-vivu-font/vvcon.ttf?9eqgt0) format("truetype"), url(/du-lich/content/fonts/new-vivu-font/vvcon.woff?9eqgt0) format("woff"), url(/du-lich/content/fonts/new-vivu-font/vvcon.svg?9eqgt0#vvcon) format("svg");
        font-weight: normal;
        font-style: normal;
        font-display: block
    }

    [class^="vvcon-"],
    [class*=" vvcon-"] {
        font-family: "vvcon" !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .vvcon-ic_add_only:before {
        content: ""
    }

    .vvcon-ic_minus_only:before {
        content: ""
    }

    .vvcon-ic_minus:before {
        content: ""
    }

    .vvcon-ic_add:before {
        content: ""
    }

    .vvcon-ic_calendar:before {
        content: ""
    }

    .vvcon-ic_view:before {
        content: ""
    }

    .vvcon-keyboard_backspace:before {
        content: ""
    }

    .vvcon-ic_back:before {
        content: ""
    }

    .vvcon-ic_ivivu_user_people:before {
        content: ""
    }

    .main-header.ivivu-main-header {
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        z-index: 10
    }

    .main-header.ivivu-main-header .navbar {
        margin-left: 0;
        border: 0 solid transparent;
        background-color: #003c71
    }

    .main-header.ivivu-main-header .navbar .nav>li>a {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .nav>li>a:hover,
    .main-header.ivivu-main-header .navbar .nav>li>a:active,
    .main-header.ivivu-main-header .navbar .nav>li>a:focus,
    .main-header.ivivu-main-header .navbar .nav .open>a,
    .main-header.ivivu-main-header .navbar .nav .open>a:hover,
    .main-header.ivivu-main-header .navbar .nav .open>a:focus,
    .main-header.ivivu-main-header .navbar .nav>.active>a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle:hover {
        color: #26bed6;
        background: none
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand {
        padding-top: 5px;
        padding-bottom: 0
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
        height: auto
    }

    @media only screen and (max-width:320px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 50px;
            position: absolute;
            left: 0;
            top: 10px
        }
    }

    @media only screen and (min-width:321px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 65px
        }
    }

    @media only screen and (min-width:992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 100%
        }
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 18px
        }
    }

    @media only screen and (min-width:480px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            border-top: 2px solid transparent;
            border-bottom: 2px solid transparent
        }
    }

    @media only screen and (min-width:768px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 16px
        }
    }

    @media only screen and (min-width:1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a {
        transition: all .1s ease-in-out;
        letter-spacing: -.2px
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a:hover {
        color: #26bed6;
        background: none
    }

    @media only screen and (min-width:992px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 10px
        }
    }

    @media only screen and (min-width:1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 13px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active {
        border-bottom: 2px solid #fdbf65
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active a {
        background: none
    }

    @media only screen and (min-width:320px)and (max-width:414px) {
        .main-header.ivivu-main-header .navbar ul.nav>li.active {
            border-bottom-width: 0
        }

        .main-header.ivivu-main-header .navbar ul.nav>li.active a {
            color: #26bed6
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu {
        background: #003c71;
        border: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
        transition: all .3s ease-in-out;
        color: #fff
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a:hover {
        background: none;
        color: #26bed6
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 18px;
            padding: 10px 15px
        }
    }

    @media only screen and (min-width:480px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px;
            padding: 8px 15px
        }
    }

    @media only screen and (min-width:768px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px
        }
    }

    @media only screen and (min-width:1200px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.active a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.divider {
        background-color: rgba(255, 255, 255, .1)
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu {
        padding: 8px 0;
        background: #fff !important;
        min-width: 246px;
        margin: 5px -15px 0 0;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .25);
        border-radius: 0
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .btn-login-wrap {
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 8px;
        padding-bottom: 12px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .btn-login-wrap .btn-login-header {
        width: 100%;
        background: #26bed6;
        color: #fff;
        border: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .btn-login-wrap .btn-login-header:hover {
        background-color: #42d7ef !important
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .register-text {
        padding: 4px 12px;
        text-align: center
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .register-text .register-link {
        cursor: pointer;
        text-decoration: underline;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .register-text .register-link:hover {
        color: #42d7ef
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:after,
    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:before {
        bottom: 100%;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:after {
        border-bottom-color: #fff;
        border-width: 6px;
        margin-left: -6px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:before {
        border-bottom-color: rgba(0, 0, 0, .25);
        border-width: 7px;
        margin-left: -7px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header {
        padding: 10px 15px;
        display: flex
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar {
        padding-right: 15px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar img {
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(78, 78, 78, .4);
        width: 43px;
        height: 43px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.name {
        font-size: 18px;
        color: #003c71
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.description {
        font-size: 13px;
        color: #000
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 170px
        }
    }

    @media only screen and (min-width:375px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 220px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .equal-row {
        display: flex;
        display: -webkit-flex;
        flex-wrap: wrap
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .point-menu-padding {
        padding-left: 0;
        padding-right: 0
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .point-text {
        padding-left: 0;
        padding-top: 4px;
        text-align: right;
        align-self: center;
        color: #003c71;
        font-size: 12px;
        font-weight: bold
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap {
        padding: 12px 16px 5px 16px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn {
        transition: all .5s;
        height: 40px;
        border-radius: 4px;
        color: #000;
        border: solid 1px #bdbdbd;
        background-color: #fff
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn:hover {
        border: solid 1px #003c71;
        color: #003c71
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a {
        font-size: 15px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-size: 14px;
        letter-spacing: normal
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a:hover {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .divider {
        background-color: rgba(0, 0, 0, .25)
    }

    @media(max-width:767px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu {
            margin-top: 8px
        }

        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:after,
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu:before {
            left: 86%
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-collapse {
        box-shadow: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu .username-header {
        max-width: 120px;
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        line-height: 21px;
        margin-bottom: -4px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper img {
        width: 39px;
        height: 39px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(78, 78, 78, .4)
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: block;
            position: absolute;
            right: 5px;
            bottom: 5px
        }
    }

    @media only screen and (min-width:992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: inline-block;
            position: absolute;
            left: -30px;
            bottom: 10px
        }
    }

    @media only screen and (min-width:768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu {
            right: 70px
        }
    }

    @media only screen and (min-width:320px)and (max-width:414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login a i.fa {
            text-shadow: 0 0 2px rgba(0, 19, 37, .5)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.logged-in a i.fa {
            color: #26bed6
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.open a.dropdown-toggle {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .12), 0 0 2px rgba(0, 0, 0, .24)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login ul.dropdown-menu {
            background: #004a8b;
            background: linear-gradient(to bottom, #004a8b, #003c71);
            right: 0%
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login {
        color: #fff;
        background: #f79321;
        border: none;
        transition: all .3s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login:hover {
        background: #fdbf65
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 0
        }
    }

    @media only screen and (min-width:375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 20px
        }
    }

    @media only screen and (min-width:992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 40px
        }
    }

    @media only screen and (min-width:320px)and (max-width:414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item.active {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .12), 0 0 2px rgba(0, 0, 0, .24)
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
        display: flex;
        justify-content: center;
        flex-direction: column
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-item {
        color: #fff;
        display: block
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
        color: #f79321;
        text-decoration: none;
        letter-spacing: -1px;
        font-weight: bold;
        transition: all .3s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link .fa {
        position: relative;
        top: 1px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
        color: #fdbf65
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-description,
    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        color: #fff;
        font-size: 12px;
        margin: 0
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown {
        user-select: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
        width: 250px;
        background: #fff;
        padding: 0;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1), 0 0 2px rgba(0, 0, 0, .15)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item {
        font-size: 16px;
        padding: 12px 15px;
        color: #6c707e;
        cursor: pointer
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item:hover {
        background: rgba(148, 151, 163, .05)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu li:not(:last-child) .hotline-dd-item {
        border-bottom: 1px solid rgba(148, 151, 163, .25)
    }

    @media only screen and (min-width:320px)and (max-width:414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
            top: 3px;
            position: absolute;
            left: -35px
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        cursor: pointer;
        transition: all .3s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location:hover {
        color: #26bed6
    }

    @media only screen and (min-width:320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 50px;
            padding-right: 5px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: -1.5px
        }
    }

    @media only screen and (min-width:375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            position: relative;
            right: 15px;
            padding-right: 0
        }
    }

    @media only screen and (min-width:768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 51px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            letter-spacing: -1px
        }
    }

    @media only screen and (min-width:992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px;
            padding-left: 30px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: -1px;
            text-decoration: none
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
            color: #fdbf65
        }
    }

    @media only screen and (min-width:1200px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px
        }
    }

    @media only screen and (-ms-high-contrast:none)and (min-width:992px),
    only screen and (-ms-high-contrast:active)and (min-width:992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 80px
        }
    }

    .header-search-form {
        border-radius: 0 0 4px 4px;
        background: #003c71;
        padding: 15px 0
    }

    .header-search-form__outer {
        position: absolute;
        left: 0;
        padding: 0
    }

    .header-search-form__outer .container {
        padding: 0
    }

    @media only screen and (min-width:1200px) {
        .header-search-form__outer {
            top: 64px
        }
    }

    .header-search-form .form-group label {
        color: #fff
    }

    @media only screen and (min-width:768px) {
        .header-search-form .form-group {
            margin-bottom: 0
        }
    }

    .header-search-form .btn-action {
        border: 1px solid #f79321
    }

    @media only screen and (min-width:320px)and (max-width:414px) {
        .header-search-form {
            background: linear-gradient(to bottom, #004a8b, #003c71)
        }

        .header-search-form__outer {
            top: 50px
        }

        .header-search-form .date-div .form-group {
            margin-bottom: 0
        }

        .header-search-form .date-div.check-in {
            padding-right: 8px
        }

        .header-search-form .date-div.check-out {
            padding-left: 8px
        }

        .header-search-form .action-div .form-group {
            margin-bottom: 0
        }
    }

    .vloader {
        margin: 0;
        font-size: 4px;
        position: relative;
        text-indent: -9999em;
        border-top: 1.1em solid rgba(33, 150, 243, .2);
        border-right: 1.1em solid rgba(33, 150, 243, .2);
        border-bottom: 1.1em solid rgba(33, 150, 243, .2);
        border-left: 1.1em solid #2196f3;
        transform: translateZ(0);
        animation: load8 1.1s infinite linear;
        display: inline-block;
        width: 20px;
        height: 20px;
        vertical-align: bottom
    }

    .vloader,
    .vloader:after {
        border-radius: 50%;
        width: 25px;
        height: 25px
    }

    @-webkit-keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes load8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @media only screen and (min-width:768px) {
        .login-modal .modal-dialog {
            width: 400px
        }
    }

    #login-modal .modal-content {
        border-radius: 0;
        font-family: Helvetica, Arial, sans-serif
    }

    #login-modal .form-control {
        border-radius: 0
    }

    #login-modal .btn-login {
        font-weight: 700
    }

    #login-modal .modal-title {
        font-weight: initial;
        margin: 0;
        line-height: 1.42857143;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #555863
    }

    #login-modal .modal-header {
        padding-left: 15px;
        padding-bottom: 15px
    }

    /* Minification failed. Returning unminified contents.
(1,51219): run-time error CSS1039: Token not allowed after unary operator: '-vh'
(1,80135): run-time error CSS1039: Token not allowed after unary operator: '-vh'
(1,82977): run-time error CSS1019: Unexpected token, found '}'
 */
    .v-ribbon h1,
    .v-ribbon h2,
    .v-ribbon h3,
    .v-ribbon h4,
    .v-ribbon h5,
    .v-ribbon h6,
    .v-ribbon span {
        z-index: 1;
        font-weight: bold;
        font-size: 14px;
        text-align: center;
        position: absolute;
        color: #FFFFFF;
        margin: 0 0px 0px -26px;
        background-color: #E52822;
        top: 15px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .v-ribbon h1:before,
    .v-ribbon h1:after,
    .v-ribbon h2:before,
    .v-ribbon h2:after,
    .v-ribbon h3:before,
    .v-ribbon h3:after,
    .v-ribbon h4:before,
    .v-ribbon h4:after,
    .v-ribbon h5:before,
    .v-ribbon h5:after,
    .v-ribbon h6:before,
    .v-ribbon h6:after,
    .v-ribbon span:before,
    .v-ribbon span:after {
        content: '';
        position: absolute;
        border-style: solid;
        border-color: transparent;
        bottom: -10px
    }

    @media only screen and (min-width: 320px) {

        .v-ribbon h1,
        .v-ribbon h2,
        .v-ribbon h3,
        .v-ribbon h4,
        .v-ribbon h5,
        .v-ribbon h6,
        .v-ribbon span {
            padding: 5px 10px 5px 20px
        }
    }

    @media only screen and (min-width: 480px) {

        .v-ribbon h1,
        .v-ribbon h2,
        .v-ribbon h3,
        .v-ribbon h4,
        .v-ribbon h5,
        .v-ribbon h6,
        .v-ribbon span {
            padding: 5px 10px 5px 10px
        }
    }

    .v-ribbon h1:before,
    .v-ribbon h2:before,
    .v-ribbon h3:before,
    .v-ribbon h4:before,
    .v-ribbon h5:before,
    .v-ribbon h6:before,
    .v-ribbon span:before {
        border-width: 0 10px 10px 0;
        border-right-color: #9C0000;
        left: 0
    }

    .vcolor-primary {
        color: #003C71
    }

    .vbackground-primary {
        background-color: #003C71
    }

    .vcolor-success {
        color: #2f7000
    }

    .vbackground-success {
        background-color: #2f7000
    }

    .vcolor-warning {
        color: #F79321
    }

    .vbackground-warning {
        background-color: #F79321
    }

    .vcolor-warning2 {
        color: #FFBD00
    }

    .vbackground-warning2 {
        background-color: #FFBD00
    }

    .vcolor-info {
        color: #26bed6
    }

    .vbackground-info {
        background-color: #26bed6
    }

    .vcolor-blue {
        color: #0f81d7
    }

    .vbackground-blue {
        background-color: #0f81d7
    }

    .vcolor-gray {
        color: #818180
    }

    .vbackground-gray {
        background-color: #818180
    }

    .vcolor-danger {
        color: #D9534F
    }

    .vbackground-danger {
        background-color: #D9534F
    }

    .vcolor-link {
        color: #40A6F2
    }

    .vbackground-link {
        background-color: #40A6F2
    }

    .vcolor-gray-dark {
        color: #4E4E4E
    }

    .vbackground-gray-dark {
        background-color: #4E4E4E
    }

    .vcolor-text-light {
        color: #6c707e
    }

    .vbackground-text-light {
        background-color: #6c707e
    }

    .vcolor-text {
        color: #555863
    }

    .vbackground-text {
        background-color: #555863
    }

    .vcolor-text-dark {
        color: #494b55
    }

    .vbackground-text-dark {
        background-color: #494b55
    }

    .vcolor-white {
        color: #fff !important
    }

    .vbackground-white {
        background-color: #fff !important
    }

    .v-margin-top-0 {
        margin-top: 0px
    }

    .v-margin-left-0 {
        margin-left: 0px
    }

    .v-margin-bottom-0 {
        margin-bottom: 0px
    }

    .v-margin-right-0 {
        margin-right: 0px
    }

    .v-padding-top-0 {
        padding-top: 0px
    }

    .v-padding-left-0 {
        padding-left: 0px
    }

    .v-padding-bottom-0 {
        padding-bottom: 0px
    }

    .v-padding-right-0 {
        padding-right: 0px
    }

    .v-margin-top-3 {
        margin-top: 3px
    }

    .v-margin-left-3 {
        margin-left: 3px
    }

    .v-margin-bottom-3 {
        margin-bottom: 3px
    }

    .v-margin-right-3 {
        margin-right: 3px
    }

    .v-padding-top-3 {
        padding-top: 3px
    }

    .v-padding-left-3 {
        padding-left: 3px
    }

    .v-padding-bottom-3 {
        padding-bottom: 3px
    }

    .v-padding-right-3 {
        padding-right: 3px
    }

    .v-margin-top-5 {
        margin-top: 5px
    }

    .v-margin-left-5 {
        margin-left: 5px
    }

    .v-margin-bottom-5 {
        margin-bottom: 5px
    }

    .v-margin-right-5 {
        margin-right: 5px
    }

    .v-padding-top-5 {
        padding-top: 5px
    }

    .v-padding-left-5 {
        padding-left: 5px
    }

    .v-padding-bottom-5 {
        padding-bottom: 5px
    }

    .v-padding-right-5 {
        padding-right: 5px
    }

    .v-margin-top-8 {
        margin-top: 8px
    }

    .v-margin-left-8 {
        margin-left: 8px
    }

    .v-margin-bottom-8 {
        margin-bottom: 8px
    }

    .v-margin-right-8 {
        margin-right: 8px
    }

    .v-padding-top-8 {
        padding-top: 8px
    }

    .v-padding-left-8 {
        padding-left: 8px
    }

    .v-padding-bottom-8 {
        padding-bottom: 8px
    }

    .v-padding-right-8 {
        padding-right: 8px
    }

    .v-margin-top-10 {
        margin-top: 10px
    }

    .v-margin-left-10 {
        margin-left: 10px
    }

    .v-margin-bottom-10 {
        margin-bottom: 10px
    }

    .v-margin-right-10 {
        margin-right: 10px
    }

    .v-padding-top-10 {
        padding-top: 10px
    }

    .v-padding-left-10 {
        padding-left: 10px
    }

    .v-padding-bottom-10 {
        padding-bottom: 10px
    }

    .v-padding-right-10 {
        padding-right: 10px
    }

    .v-margin-top-15 {
        margin-top: 15px
    }

    .v-margin-left-15 {
        margin-left: 15px
    }

    .v-margin-bottom-15 {
        margin-bottom: 15px
    }

    .v-margin-right-15 {
        margin-right: 15px
    }

    .v-padding-top-15 {
        padding-top: 15px
    }

    .v-padding-left-15 {
        padding-left: 15px
    }

    .v-padding-bottom-15 {
        padding-bottom: 15px
    }

    .v-padding-right-15 {
        padding-right: 15px
    }

    .v-margin-top-20 {
        margin-top: 20px
    }

    .v-margin-left-20 {
        margin-left: 20px
    }

    .v-margin-bottom-20 {
        margin-bottom: 20px
    }

    .v-margin-right-20 {
        margin-right: 20px
    }

    .v-padding-top-20 {
        padding-top: 20px
    }

    .v-padding-left-20 {
        padding-left: 20px
    }

    .v-padding-bottom-20 {
        padding-bottom: 20px
    }

    .v-padding-right-20 {
        padding-right: 20px
    }

    .v-margin-top-25 {
        margin-top: 25px
    }

    .v-margin-left-25 {
        margin-left: 25px
    }

    .v-margin-bottom-25 {
        margin-bottom: 25px
    }

    .v-margin-right-25 {
        margin-right: 25px
    }

    .v-padding-top-25 {
        padding-top: 25px
    }

    .v-padding-left-25 {
        padding-left: 25px
    }

    .v-padding-bottom-25 {
        padding-bottom: 25px
    }

    .v-padding-right-25 {
        padding-right: 25px
    }

    .v-margin-top-30 {
        margin-top: 30px
    }

    .v-margin-left-30 {
        margin-left: 30px
    }

    .v-margin-bottom-30 {
        margin-bottom: 30px
    }

    .v-margin-right-30 {
        margin-right: 30px
    }

    .v-padding-top-30 {
        padding-top: 30px
    }

    .v-padding-left-30 {
        padding-left: 30px
    }

    .v-padding-bottom-30 {
        padding-bottom: 30px
    }

    .v-padding-right-30 {
        padding-right: 30px
    }

    .loading-animate {
        animation: spin .7s infinite linear
    }

    @keyframes spin {
        from {
            transform: scale(1) rotate(0deg)
        }

        to {
            transform: scale(1) rotate(360deg)
        }
    }

    .v-text-300 {
        font-weight: 300
    }

    .v-text-400 {
        font-weight: 400
    }

    .v-text-500 {
        font-weight: 500
    }

    .v-text-600 {
        font-weight: 600
    }

    .v-text-700 {
        font-weight: 700
    }

    .v-max-width {
        width: 100% !important
    }

    .disableSelection,
    .non-selectable {
        user-select: none
    }

    .non-border {
        border-radius: 0px
    }

    .horizontalLineGray {
        background: linear-gradient(to right, #F1F1F2, #F1F1F2);
        height: 1px
    }

    .hide-by-default {
        display: none
    }

    .inline-block-manual {
        display: inline-block;
        width: auto
    }

    .textCurrencySmall {
        font-size: 12px
    }

    a {
        color: #003C71
    }

    a:focus,
    a:hover {
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .v-padding-right-0-xs {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .v-padding-right-0-sm {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 992px) {
        .v-padding-right-0-md {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 1200px) {
        .v-padding-right-0-lg {
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 320px) {
        .v-padding-left-0-xs {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .v-padding-left-0-sm {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 992px) {
        .v-padding-left-0-md {
            padding-left: 0px
        }
    }

    @media only screen and (min-width: 1200px) {
        .v-padding-left-0-lg {
            padding-left: 0px
        }
    }

    body {
        color: #3f3b3b
    }

    body,
    table.body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    td,
    th,
    a {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif
    }

    .pageTitle {
        color: #003C71;
        margin-top: 0px;
        margin-bottom: 15px;
        font-weight: 500
    }

    @media only screen and (max-width: 767px) {
        .pageTitle {
            font-size: 20px;
            padding-left: 15px;
            padding-right: 15px
        }
    }

    .score-container {
        font-size: 16px
    }

    .score-container .icons.stars {
        color: #F79321;
        top: 0px
    }

    .score-container .score {
        padding: 3px 5px;
        border-radius: 6px;
        background: #9FC43A;
        color: white;
        font-weight: bold
    }

    .score-container .score-description {
        color: #9FC43A;
        font-weight: bold
    }

    .score-container__more {
        line-height: 30px
    }

    .score-container__inner {
        cursor: pointer
    }

    .ribbonContainerOuter {
        position: absolute;
        top: 0px;
        left: 1px;
        width: 100%
    }

    .ribbonContainerOuter .ribbonContainerInner {
        padding: 5px 15px 3px 15px
    }

    .headLine,
    .localHeadLine {
        font-weight: normal;
        padding: 8px 0;
        margin-bottom: 15px;
        border-bottom: 1px solid #DDDDDD;
        font-size: 32px
    }

    .headLine .readMoreTours,
    .localHeadLine .readMoreTours {
        font-size: 12px;
        float: right;
        position: relative;
        top: 17px
    }

    .autoexpand_textarea {
        overflow: hidden;
        padding: 15px;
        -moz-box-sizing: content-box
    }

    .localHeadLine {
        margin-bottom: 0px;
        border-bottom: none;
        color: #003C71
    }

    .localHeadLine a {
        color: #003C71
    }

    .localHeadLine a:hover {
        color: #00529a;
        text-decoration: none
    }

    .localHeadLine.hasLine {
        margin-bottom: 30px;
        margin-top: 5px;
        border-bottom: 2px solid #003C71
    }

    .boxLink a,
    .nav-tabs-custom a {
        transition: all .2s ease-in-out;
        color: #4E4E4E
    }

    .boxLink a:hover,
    .nav-tabs-custom a:hover,
    .boxLink a:focus,
    .nav-tabs-custom a:focus {
        color: #003C71
    }

    .nav-tabs-custom {
        border-radius: 0px
    }

    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #d2d6de
    }

    .nav-tabs-custom .tab-content {
        padding: 15px
    }

    .nav.nav-tabs li a {
        border-radius: 0px
    }

    .box .box-header {
        padding: 10px 15px 10px 15px
    }

    .box .box-body {
        padding: 15px
    }

    .btn {
        font-weight: bold
    }

    .content-header {
        padding: 15px 0px
    }

    @media only screen and (min-width: 320px) {
        .content-header {
            padding: 10px 0px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header {
            padding: 15px 0px
        }
    }

    .content-header ol.breadcrumb {
        margin-top: 0px;
        background: transparent;
        left: 0px;
        word-break: break-word;
        padding: 0px;
        float: none;
        position: initial
    }

    @media only screen and (min-width: 320px) {
        .content-header ol.breadcrumb {
            letter-spacing: -0.5px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header ol.breadcrumb {
            letter-spacing: 0px
        }
    }

    .content-header ol.breadcrumb li {
        line-height: 1.4;
        display: inline
    }

    .content-header ol.breadcrumb li a {
        color: #555863;
        display: inline
    }

    .content-header ol.breadcrumb li a:hover {
        color: #494b55
    }

    @media only screen and (min-width: 320px) {
        .content-header ol.breadcrumb li a {
            font-size: 12px
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header ol.breadcrumb li a {
            font-size: 13px
        }
    }

    .content-header ol.breadcrumb>li+li:before {
        content: "/"
    }

    .content-header ol.breadcrumb img {
        display: none
    }

    .content-header ol.breadcrumb li.active a {
        color: #818180
    }

    @media only screen and (min-width: 320px) {

        .content-header ol.breadcrumb li.active,
        .content-header ol.breadcrumb li a {
            margin: 4px 4px
        }
    }

    @media only screen and (min-width: 480px) {

        .content-header ol.breadcrumb li.active,
        .content-header ol.breadcrumb li a {
            margin: 0px 0px
        }
    }

    @media only screen and (min-width: 320px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 480px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 768px) {
        .content-header h1 {
            display: none
        }
    }

    @media only screen and (min-width: 992px) {
        .content-header h1 {
            display: block
        }
    }

    a a {
        color: #26bed6
    }

    a a:focus,
    a a:hover {
        color: #26bed6
    }

    .flex-row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0px -15px
    }

    .flexBoxContainer {
        display: flex;
        flex-wrap: wrap;
        flex: 1
    }

    .input-group-addon .glyphicon.glyphicon-calendar {
        cursor: pointer
    }

    textarea {
        resize: none
    }

    .btn-action {
        transition: all .2s ease-in-out;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24);
        background: #F79321;
        border: 0px solid #F79321;
        color: #fff
    }

    .btn-action:hover {
        background: #FFBD00;
        color: #fff
    }

    .btn-action:focus {
        background: #FFBD00;
        color: #fff
    }

    .btn-action .fa {
        color: #fff !important
    }

    .btn-action--lg {
        padding: 10px 10px
    }

    .btn-action--flat {
        border-radius: 0px
    }

    .btn-main {
        transition: all .2s ease-in-out;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24);
        background: #003C71;
        border: 0px solid #003C71;
        color: #fff
    }

    .btn-main:hover {
        background: #0057a4;
        color: #fff
    }

    .btn-main:focus {
        background: #0057a4;
        color: #fff
    }

    .btn-main .fa {
        color: #fff !important
    }

    .btn-rounded {
        border-radius: 100px
    }

    .flex {
        display: flex
    }

    .flex--equal-h {
        flex: 1 0 auto
    }

    .pagination li a:hover,
    .pagination li a:focus {
        border: 1px solid rgba(15, 129, 215, 0.4);
        background: #fafafa
    }

    .pagination li.active a {
        border: 1px solid rgba(15, 129, 215, 0.4);
        color: #0f81d7;
        background: rgba(15, 129, 215, 0.1)
    }

    .pagination li.active a:hover,
    .pagination li.active a:focus {
        color: #0f81d7;
        background: rgba(15, 129, 215, 0.1)
    }

    select.form-control {
        border-radius: 0px;
        -webkit-appearance: none;
        padding-top: 0px;
        padding-bottom: 0px
    }

    .form-control {
        border-radius: 0px
    }

    .selectIcon {
        color: rgba(85, 88, 99, 0.7)
    }

    .main-header.ivivu-main-header {
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        z-index: 10
    }

    .main-header.ivivu-main-header h1,
    .main-header.ivivu-main-header h2,
    .main-header.ivivu-main-header h3,
    .main-header.ivivu-main-header h4,
    .main-header.ivivu-main-header h5,
    .main-header.ivivu-main-header h6,
    .main-header.ivivu-main-header p,
    .main-header.ivivu-main-header td,
    .main-header.ivivu-main-header th,
    .main-header.ivivu-main-header a {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif
    }

    .main-header.ivivu-main-header .navbar {
        margin-left: 0px;
        border: 0px solid transparent;
        background-color: #003C71
    }

    .main-header.ivivu-main-header .navbar .nav>li>a {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .nav>li>a:hover,
    .main-header.ivivu-main-header .navbar .nav>li>a:active,
    .main-header.ivivu-main-header .navbar .nav>li>a:focus,
    .main-header.ivivu-main-header .navbar .nav .open>a,
    .main-header.ivivu-main-header .navbar .nav .open>a:hover,
    .main-header.ivivu-main-header .navbar .nav .open>a:focus,
    .main-header.ivivu-main-header .navbar .nav>.active>a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle {
        color: #fff
    }

    .main-header.ivivu-main-header .navbar .sidebar-toggle:hover {
        color: #26bed6;
        background: none
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand {
        padding-top: 5px;
        padding-bottom: 0px
    }

    .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
        height: auto
    }

    @media only screen and (max-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 50px;
            position: absolute;
            left: 0;
            top: 10px
        }
    }

    @media only screen and (min-width: 321px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 65px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 80px
        }
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 18px
        }
    }

    @media only screen and (min-width: 480px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            border-top: 2px solid transparent;
            border-bottom: 2px solid transparent
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 16px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a {
        transition: all .1s ease-in-out;
        letter-spacing: -0.2px
    }

    .main-header.ivivu-main-header .navbar ul.nav>li>a:hover {
        color: #26bed6;
        background: none
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 10px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.nav>li>a {
            padding: 20px 10px
        }
    }

    .main-header.ivivu-main-header .navbar ul.nav>li:last-child>a {
        padding-right: 0
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active {
        border-bottom: 2px solid #FFBD00
    }

    .main-header.ivivu-main-header .navbar ul.nav>li.active a {
        background: none
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar ul.nav>li.active {
            border-bottom-width: 0px
        }

        .main-header.ivivu-main-header .navbar ul.nav>li.active a {
            color: #26bed6
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu {
        background: #003C71;
        border: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
        transition: all .2s ease-in-out;
        color: white
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a:hover {
        background: none;
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 18px;
            padding: 10px 15px
        }
    }

    @media only screen and (min-width: 480px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px;
            padding: 8px 15px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 16px
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu>li>a {
            font-size: 20px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.active a {
        background: none;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu>li.divider {
        background-color: rgba(255, 255, 255, 0.1)
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu {
        padding: 8px 0;
        background: white !important;
        min-width: 246px;
        margin: 5px -15px 0 0;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        border-radius: 0px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::before,
    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::after {
        border-bottom-color: rgba(0, 0, 0, 0.25);
        border-width: 7px;
        margin-left: -7px;
        bottom: 100%;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::before {
        border-bottom-color: rgba(0, 0, 0, 0.25);
        border-width: 7px;
        margin-left: -7px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu::after {
        border-bottom-color: #ffffff;
        border-width: 6px;
        margin-left: -6px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a {
        font-size: 15px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: black;
        font-size: 14px;
        letter-spacing: normal
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a:hover {
        background: none;
        color: #26BED6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu>li>a.point-menu-padding {
        padding-left: 0px;
        padding-right: 0px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header {
        padding: 10px 15px;
        display: flex
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar {
        padding-right: 15px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__avatar img {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(78, 78, 78, 0.4);
        width: 43px;
        height: 43px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.name {
        font-size: 18px;
        color: #26bed6
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.description {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.9)
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 170px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .member-header__info p.max {
            max-width: 220px
        }
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .point-text {
        padding-left: 0;
        padding-top: 4px;
        text-align: right;
        align-self: center;
        color: #003c71;
        font-size: 12px;
        font-weight: bold
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap {
        padding: 12px 16px 5px 16px
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn {
        transition: all .5s;
        height: 40px;
        border-radius: 4px;
        color: black;
        border: solid 1px #bdbdbd;
        background-color: white
    }

    .main-header.ivivu-main-header .navbar ul.dropdown-menu.member-dropdown-menu .logout-btn-wrap .logout-btn:hover {
        border: solid 1px #003C71;
        color: #003C71
    }

    .main-header.ivivu-main-header .navbar .navbar-collapse {
        box-shadow: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper img {
        width: 39px;
        height: 39px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(78, 78, 78, 0.4)
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: block;
            position: absolute;
            right: 5px;
            bottom: 5px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu .img-wrapper {
            display: inline-block;
            position: absolute;
            left: -30px;
            bottom: 10px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu {
            right: 70px
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login a i.fa {
            text-shadow: 0 0 2px rgba(0, 19, 37, 0.5)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.logged-in a i.fa {
            color: #26bed6
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login.open a.dropdown-toggle {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li.user-login ul.dropdown-menu {
            background: #004a8b;
            background: linear-gradient(to bottom, #004a8b, #003C71);
            right: 0%
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login {
        color: white;
        background: #F79321;
        border: none;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .btn-login:hover {
        background: #FFBD00
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 0px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 20px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item {
            margin-right: 35px
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .search-item.active {
            background: #004a8b;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
        display: flex;
        justify-content: center;
        flex-direction: column
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-item {
        color: white;
        display: block
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
        color: #F79321;
        text-decoration: none;
        letter-spacing: -1px;
        font-weight: bold;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link .fa {
        position: relative;
        top: 1px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
        color: #FFBD00
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-description,
    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        color: white;
        font-size: 12px;
        margin: 0px
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown {
        user-select: none
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
        width: 250px;
        background: white;
        padding: 0px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item {
        font-size: 16px;
        padding: 12px 15px;
        color: #6c707e;
        cursor: pointer
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu .hotline-dd-item:hover {
        background: rgba(148, 151, 163, 0.05)
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu li:not(:last-child) .hotline-dd-item {
        border-bottom: 1px solid rgba(148, 151, 163, 0.25)
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-dropdown .dropdown-menu {
            top: 3px;
            position: absolute;
            left: -35px
        }
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location {
        cursor: pointer;
        transition: all .2s ease-in-out
    }

    .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-location:hover {
        color: #26bed6
    }

    @media only screen and (min-width: 320px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 50px;
            padding-right: 5px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: -1.5px
        }
    }

    @media only screen and (min-width: 375px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            position: relative;
            right: 15px;
            padding-right: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 51px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            letter-spacing: -1px
        }
    }

    @media only screen and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px;
            padding-left: 25px
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link {
            font-size: 26px;
            font-weight: bold;
            letter-spacing: -1px;
            text-decoration: none
        }

        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline .hotline-link:hover {
            color: #FFBD00
        }
    }

    @media only screen and (min-width: 1200px) {
        .main-header.ivivu-main-header .navbar .navbar-custom-menu ul.nav>li .hotline {
            height: 60px
        }
    }

    @media only screen and (-ms-high-contrast: none) and (min-width: 992px),
    only screen and (-ms-high-contrast: active) and (min-width: 992px) {
        .main-header.ivivu-main-header .navbar .navbar-header .navbar-brand img {
            width: 80px
        }
    }

    .header-search-form {
        border-radius: 0 0 4px 4px;
        background: #003C71;
        padding: 15px 0px
    }

    .header-search-form__outer {
        position: absolute;
        left: 0px;
        padding: 0px
    }

    .header-search-form__outer .container {
        padding: 0px
    }

    @media only screen and (min-width: 1200px) {
        .header-search-form__outer {
            top: 64px
        }
    }

    .header-search-form .form-group label {
        color: white
    }

    @media only screen and (min-width: 768px) {
        .header-search-form .form-group {
            margin-bottom: 0px
        }
    }

    .header-search-form .btn-action {
        border: 1px solid #F79321
    }

    @media only screen and (min-width: 320px) and (max-width: 414px) {
        .header-search-form {
            background: linear-gradient(to bottom, #004a8b, #003C71)
        }

        .header-search-form__outer {
            top: 50px
        }

        .header-search-form .date-div .form-group {
            margin-bottom: 0px
        }

        .header-search-form .date-div.check-in {
            padding-right: 8px
        }

        .header-search-form .date-div.check-out {
            padding-left: 8px
        }

        .header-search-form .action-div .form-group {
            margin-bottom: 0px
        }
    }

    .close-modal-button {
        width: 100%;
        margin-top: -22px;
        position: fixed;
        color: white;
        text-align: right;
        margin-left: 15px;
        cursor: pointer
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        cursor: default
    }

    .form-control[disabled].input-white,
    .form-control[readonly].input-white,
    fieldset[disabled] .form-control.input-white {
        background-color: white;
        opacity: 1
    }

    @media only screen and (min-width: 320px) {
        .cardItem {
            padding: 0px 0px 30px 0px
        }
    }

    @media only screen and (min-width: 480px) {
        .cardItem {
            padding: 0px 0px 30px 0px
        }
    }

    .cardItem .cardItemContainer {
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.1);
        border: solid 1px #dedfe3;
        margin: 0px;
        padding: 0px;
        font-size: 13px
    }

    .cardItem .cardItemContainer:hover {
        box-shadow: 0 0 16px 0 rgba(38, 190, 214, 0.8);
        border: solid 1px #26bed6
    }

    .cardItem .cardItemContainer:hover .cardItemContent {
        border: 1px solid rgba(64, 166, 242, 0.2)
    }

    .cardItem .cardItemContainer .v-ribbon .normalContent {
        font-weight: normal
    }

    .cardItem .cardItemContainer .cardItemImage figure {
        display: block;
        position: relative;
        overflow: hidden
    }

    .cardItem .cardItemContainer .cardItemImage figure img {
        object-fit: cover;
        max-width: 100%;
        min-height: 224px;
        -moz-transition: .5s ease-in-out;
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out
    }

    @media only screen and (min-width: 320px) {
        .cardItem .cardItemContainer .cardItemImage figure img {
            width: 100%
        }
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemImage figure img {
            min-height: 180px
        }
    }

    .cardItem .cardItemContainer .cardItemContent {
        transition: all .2s ease-in-out;
        color: #4E4E4E;
        padding: 10px 0px;
        background-color: white;
        border: 1px solid #e4e4e6
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemTourNameDiv .cardItemTourName {
        color: #003C71;
        font-size: 16px;
        font-weight: bold
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv {
        min-height: 54px
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv {
            min-height: initial
        }
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv .tourListPros {
        color: #26bed6;
        margin-bottom: 0px
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemDepartDiv .tourListPros li:before {
        content: "\2022  "
    }

    .cardItem .cardItemContainer .cardItemContent .note {
        font-style: italic
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice {
        position: relative
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price {
        font-size: 22px;
        font-weight: bold;
        float: right
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price .textCurrency {
        font-size: 13px;
        font-weight: initial
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .tourBooking24H {
        float: left;
        color: #e52822;
        background-color: #fceaea;
        padding: 2px 5px 3px;
        margin-top: 3px;
        border-radius: 2px
    }

    @media only screen and (max-width: 767px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemPrice .tourBooking24H {
            float: right
        }
    }

    .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price-line {
        position: absolute;
        right: 15px;
        top: -20px;
        font-weight: 400;
        color: #828282;
        font-size: 15px;
        text-decoration: line-through
    }

    @media only screen and (max-width: 375px) {
        .cardItem .cardItemContainer .cardItemContent .cardItemPrice .price-line {
            position: relative;
            right: auto;
            top: auto;
            float: right;
            margin-top: 7px;
            margin-right: 10px
        }
    }

    .cardItem .cardItemContainer .cardItemContent i.fa {
        margin: 5px
    }

    .cardItem .cardItemContainer .cardItemLocation {
        position: absolute;
        right: 0px;
        top: 11px;
        color: white;
        font-size: 12px;
        font-weight: normal;
        -webkit-text-shadow: 1px 1px 4px black;
        -moz-text-shadow: 1px 1px 4px black;
        text-shadow: 1px 1px 4px black;
        text-align: right;
        width: 100%;
        background: rgba(0, 0, 0, 0.1);
        padding: 6px 15px
    }

    @media only screen and (min-width: 320px) {
        .cardItem .cardItemContainer .cardItemLocation {
            padding: 9px 15px
        }
    }

    @media only screen and (min-width: 480px) {
        .cardItem .cardItemContainer .cardItemLocation {
            padding: 6px 15px
        }
    }

    .cardItem .cardItemContainer .cardItemTitle {
        transition: all .7s ease-in-out;
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        position: absolute;
        top: 0px;
        width: 100%;
        font-size: 16px;
        padding-top: 10px;
        padding-bottom: 2px;
        background: rgba(0, 70, 126, 0.7);
        z-index: 1;
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.6)
    }

    .cardItem .cardItemContainer .cardItemTitle p {
        margin: 0px;
        font-weight: normal;
        color: white
    }

    .cardItem .cardItemContainer .cardItemButton {
        font-size: 13px;
        padding: 6px 20px
    }

    .cardItem .cardItemContainer .ribbonDiv {
        position: relative;
        left: 1px;
        top: -50px
    }

    .cardItem .cardItemContainer .ribbonDiv h1 {
        font-weight: normal;
        font-size: 14px
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter {
        transition: all .7s ease-in-out;
        text-rendering: geometricPrecision;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale;
        -moz-font-smoothing: antialiased;
        -webkit-font-smoothing: subpixel-antialiased;
        -webkit-font-smoothing: antialiased;
        background: rgba(0, 70, 126, 0.8);
        position: absolute;
        bottom: 0px;
        left: 0px
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner {
        padding: 5px 15px 3px 15px;
        font-size: 14px;
        color: #4E4E4E;
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.6)
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceAfterDiscount {
        color: white;
        font-size: 14px;
        font-weight: bold
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceAfterDiscount i.glyphicon {
        color: #F79321
    }

    .cardItem .cardItemContainer .cardItemPriceDivOuter .cardItemPriceDivInner .cardItemPriceBeforeDiscount {
        text-decoration: line-through;
        color: white;
        font-weight: normal
    }

    .btn.btn-flat {
        border-radius: 0
    }

    .panel-group a {
        color: #40A6F2
    }

    .panel-group a:focus,
    .panel-group a:hover {
        color: #26bed6
    }

    .panel-group .panel {
        border-radius: 0px
    }

    .panel-group .panel+.panel {
        margin-top: 15px
    }

    .panel-group .panel .panel-heading {
        border-radius: 0px
    }

    .panel-group .panel .panel-heading .panel-title {
        font-size: 18px
    }

    .panel-group .panel .panel-heading .panel-title a {
        color: #4E4E4E
    }

    .panel-group .panel .panel-heading .panel-title a:focus,
    .panel-group .panel .panel-heading .panel-title a:hover {
        color: #4E4E4E
    }

    .panel-group .panel .panel-body .row>div {
        padding: 5px 15px
    }

    .icon-bus:before {
        content: ""
    }

    .icon-plane:before {
        content: ""
    }

    .icon-boat:before {
        content: ""
    }

    .icon-train:before {
        content: ""
    }

    .icon-ticket2:before {
        content: ""
    }

    .icon-flag2:before {
        content: ""
    }

    .icon-checkmark3:before {
        content: ""
    }

    .icon-breakfast:before {
        content: ""
    }

    body,
    table.body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    td,
    th,
    a {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 400
    }

    .form-group {
        color: #555863
    }

    .form-group label {
        font-weight: 500
    }

    .v-modal.primary .modal-content .modal-header {
        background: #003C71
    }

    .v-modal.primary .modal-content .modal-header .close {
        color: white;
        opacity: 0.3;
        width: 15px
    }

    .v-modal.primary .modal-content .modal-header .close .fa {
        position: relative;
        top: 2px
    }

    .v-modal.primary .modal-content .modal-header .modal-title {
        color: white
    }

    .v-modal .modal-content {
        color: #555863
    }

    .v-modal .modal-content .control-label {
        font-weight: 500
    }

    @media only screen and (min-width: 320px) {
        .v-modal .modal-content .modal-footer button {
            padding: 12px;
            font-size: 16px
        }
    }

    @media only screen and (min-width: 480px) {
        .v-modal .modal-content .modal-footer button {
            padding: 8px;
            font-size: 14px
        }
    }

    .daterangepicker {
        user-select: none;
        border-radius: 4px;
        margin-top: 15px;
        background: transparent;
        width: auto !important;
        border: 0px solid transparent;
        padding: 0px
    }

    .daterangepicker.show-calendar {
        padding: 0px
    }

    .daterangepicker:after {
        border-bottom-color: #EBEBEB;
        border-width: 9px;
        top: -7px
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker:after {
            display: none !important
        }
    }

    .daterangepicker:before {
        border-bottom-color: transparent;
        border-width: 10px;
        top: -4px
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker:before {
            display: none !important
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensleft:before {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensleft:after {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .ranges {
            display: none !important
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensright:before {
            display: none
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .opensright:after {
            display: none
        }
    }

    .daterangepicker .calendar {
        max-width: none !important;
        width: auto
    }

    @media only screen and (min-width: 320px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 6px 8px
        }
    }

    @media only screen and (min-width: 375px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 6px 8px
        }
    }

    @media only screen and (min-width: 414px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 10px 14px
        }
    }

    @media only screen and (min-width: 484px) {

        .daterangepicker .calendar th td,
        .daterangepicker .calendar tr td {
            padding: 8px 10px
        }
    }

    .daterangepicker .calendar th td.line-through-cell,
    .daterangepicker .calendar tr td.line-through-cell {
        text-decoration: line-through
    }

    .daterangepicker .calendar.single {
        width: auto !important;
        margin: 0px;
        background: #EBEBEB;
        padding: 10px;
        border-radius: 4px
    }

    @media only screen and (min-width: 320px) {
        .daterangepicker .calendar.single {
            padding: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .daterangepicker .calendar.single {
            padding: 10px
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker .calendar-table {
            position: fixed;
            bottom: 0px;
            left: 0px;
            width: 100%
        }

        .daterangepicker .calendar-table .calendar-header-mb {
            display: flex;
            height: auto
        }

        .daterangepicker .calendar-table .calendar-header-mb .drag-handle {
            width: 100px;
            height: 6px;
            border-radius: 8px;
            background-color: #e9eaec;
            margin: 10px auto;
            display: block
        }
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th {
        color: #494b55;
        font-weight: bold
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th:first-child {
        color: #494b55
    }

    .daterangepicker .calendar-table table thead tr:nth-child(2) th:nth-last-child(1),
    .daterangepicker .calendar-table table thead tr:nth-child(2) th:nth-last-child(2) {
        color: #D9534F
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker select .monthselect {
            border-radius: 4px
        }
    }

    @media only screen and (max-width: 768px) {
        .daterangepicker select .yearselect {
            border-radius: 4px
        }
    }

    .daterangepicker td.disabled,
    .daterangepicker option.disabled {
        text-decoration: inherit;
        cursor: default
    }

    .daterangepicker td {
        color: #494b55;
        border: 2px solid transparent;
        transition: all .1s ease-in-out
    }

    .daterangepicker td.off.disabled {
        color: rgba(108, 112, 126, 0.35) !important;
        text-decoration: none;
        pointer-events: none
    }

    .daterangepicker td.off.available {
        color: rgba(108, 112, 126, 0.85)
    }

    .daterangepicker td:nth-last-child(1).weekend,
    .daterangepicker td:nth-last-child(2).weekend {
        color: #D9534F
    }

    .daterangepicker td:nth-last-child(1).weekend.off,
    .daterangepicker td:nth-last-child(2).weekend.off {
        color: rgba(217, 83, 79, 0.6)
    }

    .daterangepicker td.in-range {
        color: #0d73bf;
        background-color: rgba(64, 166, 242, 0.1)
    }

    .daterangepicker td.in-range.available {
        color: #0d73bf
    }

    .daterangepicker td.active {
        background-color: #0082bb !important
    }

    .daterangepicker td.active.start-date.end-date.available,
    .daterangepicker td.start-date,
    .daterangepicker td.end-date {
        border-radius: 0px
    }

    .daterangepicker td.active.start-date {
        border-radius: unset
    }

    .daterangepicker td.active.end-date {
        border-radius: unset
    }

    .daterangepicker td.available:not(.start-date):not(.end-date):hover {
        border-radius: 0px;
        color: #003C71;
        background-color: rgba(0, 60, 113, 0.1)
    }

    .daterangepicker td.start-date,
    .daterangepicker td.end-date {
        color: white !important;
        background-color: #003C71
    }

    .daterangepicker td.start-date:hover,
    .daterangepicker td.end-date:hover {
        background-color: #00213e
    }

    @media only screen and (min-width: 768px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 690px
        }
    }

    @media only screen and (min-width: 998px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 910px
        }
    }

    @media only screen and (min-width: 1200px) {
        .typeahead-container.typeahead-hotel-list .tt-menu {
            width: 730px
        }
    }

    .typeahead-container .emptyData {
        padding: 15px;
        text-align: center
    }

    .typeahead-container .dataTitle {
        padding: 15px 15px 5px 15px;
        margin: 0px;
        font-weight: bold;
        border-top: 1px solid #ddd;
        color: #003C71
    }

    .typeahead-container .dataTitle .fa {
        color: #003C71
    }

    .typeahead-container .twitter-typeahead {
        width: 100%
    }

    .typeahead-container .twitter-typeahead input {
        color: #494b55
    }

    .typeahead-container .tt-hint {
        color: #6c707e
    }

    .typeahead-container .tt-menu {
        width: 100%;
        margin-top: 1px;
        color: #494b55;
        border-radius: 4px;
        background: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12), 0 0px 2px rgba(0, 0, 0, 0.24)
    }

    .typeahead-container .tt-menu .tt-dataset {
        background: white;
        border-radius: 4px;
        position: relative;
        width: 100%
    }

    .typeahead-container .tt-menu .tt-dataset-popularLocation {
        padding-bottom: 10px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion {
        padding: 15px 15px;
        border-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion .tourCount {
        margin-left: 5px;
        font-size: 12px;
        color: #003C71
    }

    .typeahead-container .tt-menu .tt-dataset .tt-suggestion mark {
        padding: 0px;
        color: #494b55;
        font-weight: normal;
        background-color: transparent
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable {
        cursor: pointer;
        background: white
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable:hover {
        background: rgba(73, 75, 85, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .tt-menu .tt-dataset .tt-selectable.tt-cursor {
        background: rgba(73, 75, 85, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .search-header {
        padding: 15px 15px 0px 15px
    }

    .typeahead-container .search-header__inner {
        border-bottom: 1px solid rgba(108, 112, 126, 0.15)
    }

    .typeahead-container .search-header .title {
        font-size: 16px;
        font-weight: bold
    }

    .typeahead-container .search-result__icon {
        font-size: 18px;
        margin-right: 10px
    }

    .typeahead-container .search-result__description {
        color: #6c707e
    }

    .typeahead-container .search-result.suggestion .media .media-left picture img {
        width: 60px;
        border-radius: 4px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .typeahead-container .search-result.suggestion .media .media-body .media-heading {
        font-size: 16px;
        color: #494b55
    }

    @media only screen and (max-width: 479px) {
        .tour-list-search-container {
            padding: 0px
        }
    }

    .search-wrapper .tour-list-search-container .search-form .back-home {
        display: none;
        position: absolute;
        top: -40px;
        left: 15px;
        z-index: 11
    }

    @media only screen and (max-width: 767px) {
        .search-wrapper .tour-list-search-container .search-form {
            padding: 0
        }

        .search-wrapper .tour-list-search-container .search-form .back-home {
            display: block
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief {
            position: absolute;
            z-index: 10;
            top: -56px;
            left: 0;
            width: 100%;
            background-color: #003c71;
            color: #fff;
            height: 60px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header {
            border: none;
            padding: 10px 15px 0
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title {
            color: #fff;
            font-size: 18px;
            text-align: center
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title .ico-ic_location {
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__header--title .tourDepartLocation {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            padding: 0 18px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body {
            border: none;
            padding: 0px 15px 4px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div {
            display: block !important;
            text-align: center
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div {
            display: inline-block
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div.v-margin-right-15 {
            margin-right: 0
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .dateCheckinStr {
            font-weight: 400
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .icon-dot {
            display: inline-block;
            padding: 0 8px 0 5px
        }

        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .ico-ic_date,
        .search-wrapper .tour-list-search-container .search-form .search-brief__body>div>div .ico-ic_departure {
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .main-search-form {
            padding: 0 15px 15px;
            display: none
        }

        .search-wrapper .tour-list-search-container .search-form .main-search-form.show {
            display: block
        }
    }

    .search-brief {
        color: #494b55;
        background: white;
        border-radius: 4px;
        font-size: 14px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all .2s ease-in-out;
        animation-duration: 0.2s !important;
        animation-delay: 0s
    }

    .search-brief__header {
        padding: 10px 15px;
        border-bottom: 1px solid rgba(108, 112, 126, 0.15)
    }

    .search-brief__header--title {
        font-size: 17px;
        font-weight: bold;
        margin: 0px;
        color: #003C71
    }

    .search-brief__body {
        padding: 10px 15px
    }

    .search-brief .icon {
        color: rgba(108, 112, 126, 0.8);
        font-size: 16px;
        margin-right: 5px
    }

    @media only screen and (max-width: 479px) {
        .search-brief {
            display: block
        }
    }

    @media only screen and (min-width: 480px) {
        .search-brief {
            display: none
        }
    }

    .search-form {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 4px
    }

    .search-form.home-page {
        background: rgba(0, 0, 0, 0.3)
    }

    @media only screen and (min-width: 768px) {
        .search-form .no-padding-r {
            padding-right: 0
        }
    }

    .search-form .no-padding-r.typeahead-container {
        padding-right: 0
    }

    @media only screen and (max-width: 991px) {
        .search-form .no-padding-r.typeahead-container {
            padding-right: 15px
        }
    }

    .search-form .input-icon {
        position: absolute;
        color: rgba(108, 112, 126, 0.8);
        margin-left: 16px;
        margin-right: 4px;
        font-size: 18px
    }

    @media only screen and (min-width: 320px) {
        .search-form.tour-list {
            border-radius: 0
        }

        .search-form.tour-list .typeahead-container {
            margin-bottom: 15px;
            padding-right: 15px
        }
    }

    @media only screen and (min-width: 998px) {
        .search-form.tour-list {
            margin-top: 0px;
            border-radius: 0 0 4px 4px
        }

        .search-form.tour-list .typeahead-container {
            margin-bottom: 0px;
            padding-right: 0px
        }
    }

    .search-form .main-search-form {
        transition: all .2s ease-in-out;
        animation-duration: 0.15s !important;
        animation-delay: 0s
    }

    @media only screen and (max-width: 479px) {
        .search-form .main-search-form {
            display: none
        }
    }

    .search-form .header {
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .search-form .header__title {
        color: #6c707e;
        font-size: 17px
    }

    .search-form .header__close {
        display: inline-block;
        padding: 4px 20px;
        background: rgba(73, 75, 85, 0.5);
        color: white;
        border-radius: 50px;
        cursor: pointer;
        font-size: 17px;
        transition: all .2s ease-in-out
    }

    .search-form .header__close:hover,
    .search-form .header__close:focus {
        background: rgba(73, 75, 85, 0.15)
    }

    @media only screen and (min-width: 480px) {
        .search-form .header {
            display: none
        }
    }

    .search-form .form-control {
        box-shadow: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        color: #494b55
    }

    .search-form .form-control:read-only {
        box-shadow: none;
        background-color: white;
        cursor: default
    }

    .search-form .form-control.search-input {
        font-size: 16px;
        height: 60px;
        padding: 0px 15px;
        padding-left: 50px
    }

    .search-form .dates .nights {
        color: #6c707e;
        position: absolute;
        background: white;
        display: inline-block;
        font-size: 14px;
        letter-spacing: -1px;
        min-width: 40px;
        left: -20px;
        text-align: center
    }

    .search-form .dates .nights .vicon {
        margin-left: 2px;
        color: rgba(108, 112, 126, 0.8)
    }

    .search-form .dates .check-in .v_field {
        border-right: 1px solid rgba(108, 112, 126, 0.15);
        border-radius: 4px 0px 0px 4px;
        padding-right: 0px
    }

    .search-form .dates .check-out .v_field {
        border-radius: 0px 4px 4px 0px;
        padding-right: 0px;
        padding-left: 30px
    }

    @media only screen and (min-width: 768px) {
        .search-form .rooms {
            padding: 0px
        }
    }

    .search-form .v_field {
        height: 60px;
        display: flex;
        align-items: center;
        vertical-align: middle;
        border-radius: 4px;
        cursor: pointer;
        background: white;
        transition: all 0.3s linear;
        user-select: none;
        color: #494b55;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .search-form .v_field__icon-container .icon {
        color: rgba(108, 112, 126, 0.8)
    }

    @media only screen and (min-width: 320px) {
        .search-form .v_field__icon-container .icon {
            font-size: 16px;
            margin-right: 10px
        }
    }

    @media only screen and (min-width: 480px) {
        .search-form .v_field__icon-container .icon {
            font-size: 20px;
            margin-right: 15px
        }
    }

    .search-form .v_field__text,
    .search-form .v_field__description {
        margin-bottom: 0px
    }

    .search-form .v_field__description {
        color: #6c707e
    }

    .search-form .v_field__description {
        color: #6c707e
    }

    .search-form .v_field__input {
        border: 0px;
        background: none;
        border: none;
        box-shadow: none;
        padding: 0px
    }

    .search-form .v_field__input:focus {
        outline: none
    }

    .search-form .v_field__content {
        font-size: 16px
    }

    @media only screen and (max-width: 320px) {
        .search-form .v_field__content {
            font-size: 14px;
            letter-spacing: -0.3px
        }
    }

    .search-form .search-form-button {
        height: 60px;
        border-radius: 4px;
        font-size: 16px
    }

    .search-form .departure-popover {
        background: white;
        border-radius: 4px;
        z-index: 5
    }

    @media only screen and (min-width: 320px) {
        .search-form .departure-popover {
            padding: 0px;
            margin-top: 1px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form .departure-popover {
            margin-top: 1px;
            position: absolute;
            padding: 0px;
            top: 60px
        }
    }

    .search-form .departure-popover__inner {
        border-radius: 4px;
        padding: 5px;
        background: white;
        box-shadow: 0px 10px 16px 10px rgba(0, 0, 0, 0.2)
    }

    .search-form .departure-popover__item {
        padding: 8px 50px;
        color: #6c707e;
        border-radius: 4px;
        cursor: pointer
    }

    .search-form .departure-popover__item .media-heading {
        margin: 5px 0
    }

    .search-form .departure-popover__item:hover {
        background: rgba(108, 112, 126, 0.1);
        box-shadow: 1px 2px 5px 2px rgba(0, 0, 0, 0.2)
    }

    .search-form .departure-popover__item .fa.fa-check {
        display: none
    }

    .search-form .departure-popover__item.selected {
        position: relative;
        background: rgba(108, 112, 126, 0.1)
    }

    .search-form .departure-popover__item.selected .fa.fa-check {
        display: block;
        position: absolute;
        display: inline-block;
        top: 4px;
        right: -5px;
        font-size: 20px
    }

    .search-form .room-popover {
        background: #EBEBEB;
        border-radius: 4px;
        z-index: 3
    }

    @media only screen and (min-width: 320px) {
        .search-form .room-popover {
            padding: 0px;
            margin-top: 1px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form .room-popover {
            margin-top: 0px;
            position: absolute;
            top: 74px;
            padding: 10px
        }

        .search-form .room-popover:after,
        .search-form .room-popover:before {
            bottom: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .search-form .room-popover:after {
            border-color: rgba(255, 255, 255, 0);
            border-bottom-color: #EBEBEB;
            border-width: 9px;
            left: 50%;
            margin-left: -9px
        }

        .search-form .room-popover:before {
            border-color: rgba(113, 158, 206, 0);
            border-bottom-color: transparent;
            border-width: 10px;
            left: 50%;
            margin-left: -10px
        }
    }

    .search-form .room-popover__inner {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        background: white;
        padding: 0px
    }

    .search-form .room-popover__item {
        padding: 10px;
        color: #6c707e
    }

    .search-form .room-popover__item.child-age-selection {
        padding: 15px 5px 5px 5px
    }

    .search-form .room-popover .room-popover__item~.room-popover__item {
        border-top: 1px solid rgba(108, 112, 126, 0.15)
    }

    .search-form .room-popover__quantity {
        display: flex;
        vertical-align: middle;
        align-items: center
    }

    .search-form .room-popover__quantity .quantity {
        min-width: 26px;
        text-align: center;
        display: inline-block;
        margin-right: 15px;
        font-size: 21px;
        color: #494b55
    }

    .search-form .room-popover .btn-group .btn {
        color: #6c707e
    }

    .search-form .room-popover .child-ages {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
        -moz-font-feature-settings: "liga" on
    }

    .search-form .room-popover .child-ages__item {
        display: flex;
        padding: 5px
    }

    @media only screen and (min-width: 320px) {
        .search-form .room-popover .child-ages__item {
            width: calc(100% / 3)
        }
    }

    .search-form .room-popover .child-ages .select-child {
        width: 100%
    }

    .search-form .room-popover .child-ages .select-child:after {
        font-family: FontAwesome;
        content: "\f107";
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
        position: absolute;
        right: 20px;
        top: 10px;
        z-index: 1;
        text-align: center;
        width: 10%;
        height: auto;
        pointer-events: none
    }

    .search-form .room-popover .child-ages .select-child select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        border-radius: 4px;
        height: 40px;
        z-index: 1
    }

    .search-form .room-popover .child-ages .select-child select.form-control+.select-icon {
        position: absolute;
        right: 16px;
        top: 13px
    }

    @media only screen and (min-width: 320px) {
        .search-form {
            padding: 10px 15px;
            margin-bottom: 0px
        }
    }

    @media only screen and (min-width: 768px) {
        .search-form {
            padding: 15px;
            margin-bottom: 15px
        }
    }

    @media only screen and (max-width: 767px) {

        .search-form .dates,
        .search-form .rooms {
            margin-bottom: 15px
        }

        .search-form .departure-popover {
            border: none;
            height: calc(100% - 180px);
            transition: 1s;
            position: fixed;
            bottom: 0px;
            left: 0px;
            overflow-y: scroll;
            background: white;
            border-radius: 0px;
            z-index: 99;
            margin: 0px
        }

        .search-form .departure-popover .departure-header-mb {
            position: fixed;
            width: 100%;
            height: 90px;
            background: #fff;
            z-index: 100;
            margin-left: -16px;
            flex-direction: column;
            top: 180px
        }

        .search-form .departure-popover .departure-header-mb .drag-handle {
            width: 100px;
            height: 6px;
            border-radius: 8px;
            background-color: #e9eaec;
            margin: 12px auto 21px auto
        }

        .search-form .departure-popover .departure-header-mb .departure-title-mb {
            text-align: left;
            font-family: Helvetica;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b;
            margin-left: 16px
        }

        .search-form .departure-popover__inner {
            border-radius: 0px;
            padding: 0px 16px 0px 16px;
            background: white;
            box-shadow: none
        }

        .search-form .departure-popover__item {
            text-align: left;
            font-family: Helvetica;
            font-size: 20px;
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b;
            padding: 15px 0px 15px 0px
        }

        .search-form .departure-popover__item~.departure-popover__item {
            border-top: 1px solid #f2f2f2
        }

        .search-form .tour-list .popup-searchcontent-mb {
            border-radius: unset;
            box-shadow: none;
            border: none;
            height: 100vh;
            height: calc(var(--vh, 1vh) * 100);
            transition: 1s;
            overflow: hidden
        }
    }

    .invisible-date-container,
    .departure-container {
        position: absolute;
        top: 0px
    }

    .invisible-date-container .invisible-date-picker,
    .invisible-date-container .departure-location,
    .departure-container .invisible-date-picker,
    .departure-container .departure-location {
        height: 60px;
        width: 100%;
        color: transparent;
        cursor: pointer
    }

    .handleBarsPopularLocationItem .media .media-left picture img {
        width: 60px;
        border-radius: 2px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .handleBarsPopularLocationItem .media .media-body .media-heading {
        color: #494b55
    }

    .typeahead-flightcode {
        width: 35px;
        display: inline-block
    }

    .newLabel {
        position: relative;
        top: 2px
    }

    .typeAHeadDiv .emptyData {
        padding: 15px;
        text-align: center
    }

    .typeAHeadDiv .dataTitle {
        padding: 15px 15px 5px 15px;
        margin: 0px;
        font-weight: bold;
        border-top: 1px solid #ddd;
        color: #003C71
    }

    .typeAHeadDiv .dataTitle .fa {
        color: #003C71
    }

    .typeAHeadDiv .twitter-typeahead {
        width: 100%
    }

    .typeAHeadDiv .twitter-typeahead input {
        color: #494b55
    }

    .typeAHeadDiv .input-group-btn {
        top: -2px
    }

    @-moz-document url-prefix() {
        .typeAHeadDiv .input-group-btn {
            top: -3px
        }
    }

    .typeAHeadDiv .tt-hint {
        color: #818180 !important
    }

    .typeAHeadDiv .tt-menu {
        width: 100%;
        margin-top: 1px;
        border-bottom: 1px solid #ddd;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-top: 0px;
        color: #494b55
    }

    .typeAHeadDiv .tt-menu .tt-dataset {
        width: 100%;
        background-color: #fff
    }

    .typeAHeadDiv .tt-menu .tt-dataset-popularLocation {
        padding-bottom: 10px
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion {
        padding: 8px 15px
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion .tourCount {
        margin-left: 5px;
        font-size: 12px;
        color: #003C71
    }


    /* // ==================== */
    .typeAHeadDiv .tt-menu .tt-dataset .tt-suggestion mark {
        padding: 0px;
        color: #494b55;
        font-weight: bold;
        background-color: transparent
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable {
        transition: all .2s ease-in-out;
        cursor: pointer
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable:hover {
        background-color: rgba(64, 166, 242, 0.1)
    }

    .typeAHeadDiv .tt-menu .tt-dataset .tt-selectable.tt-cursor {
        background-color: rgba(64, 166, 242, 0.1)
    }

    .whyIvivu {
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #f6f8fa
    }

    .whyIvivuContainer .media {
        color: #828282;
        padding-top: 5px;
        padding-bottom: 5px
    }

    @media only screen and (min-width: 320px) {
        .whyIvivuContainer .media .media-left i.fa {
            font-size: 30px
        }
    }

    @media only screen and (min-width: 768px) {
        .whyIvivuContainer .media .media-left i.fa {
            font-size: 45px
        }
    }

    .whyIvivuContainer .media .media-left img {
        min-width: 40px;
        min-height: 40px
    }

    @media only screen and (min-width: 320px) {
        .whyIvivuContainer .media .media-body p.media-heading {
            font-size: 14px;
            margin-bottom: 0
        }

        .whyIvivuContainer .media .media-body p.media-heading b {
            color: #3f3b3b;
            font-weight: normal;
            font-size: 20px
        }
    }

    @media only screen and (min-width: 768px) {
        .whyIvivuContainer .media .media-body p.media-heading {
            font-size: 16px;
            margin-bottom: 0
        }
    }

    @media only screen and (min-width: 320px) {
        .whyIvivuContainer {
            margin-bottom: 15px
        }
    }

    .typeAHeadDiv .dataTitle {
        border: none
    }

    .typeAHeadDiv .tt-menu {
        border: none
    }

    .tourHomeHeader {
        transition: all .2s ease-in-out;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        object-fit: cover
    }

    @media only screen and (min-width: 320px) {
        .tourHomeHeader {
            height: 472px;
            padding: 30px 0 0
        }

        .tourHomeHeader.tailor-tour {
            height: 790px;
            background-position: bottom
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHomeHeader.tailor-tour {
            height: 720px;
            background-position: bottom
        }
    }

    @media only screen and (min-width: 768px) {
        .tourHomeHeader {
            height: 492px;
            padding: 50px 0px
        }

        .tourHomeHeader.tailor-tour {
            height: 520px
        }
    }

    .tourHomeHeader.tailor-tour .info-tailor-tour {
        padding: 24px 19px 18px 20px;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.9)
    }

    .tourHomeHeader.tailor-tour .info-tailor-tour h1 {
        color: #003c71;
        margin: 10px 0;
        font-size: 28px;
        text-transform: uppercase
    }

    .tourHomeHeader.tailor-tour .info-tailor-tour p {
        font-size: 16px;
        line-height: 23px;
        color: #333333
    }

    .tourHomeHeader.tailor-tour .info-tailor-tour .btn-action {
        min-width: 188px
    }

    @media only screen and (max-width: 768px) {
        .tourHomeHeader.tailor-tour .info-tailor-tour {
            padding: 15px
        }

        .tourHomeHeader.tailor-tour .info-tailor-tour p {
            font-size: 14px;
            line-height: 20px
        }
    }

    .tourHomeHeader .top-sale {
        position: relative;
        font-size: 16px;
        padding: 10px 15px;
        background: #f4dcdb;
        border-radius: 30px;
        color: #e52822;
        top: -7px;
        font-weight: normal
    }

    .top-sale {
        position: relative;
        font-size: 16px;
        padding: 10px 15px;
        background: #f4dcdb;
        color: #e52822;
        font-weight: normal;
        margin: 0
    }

    .top-sale.top-sale-m {
        visibility: hidden;
        display: none
    }

    @media only screen and (max-width: 767px) {
        .top-sale.top-sale-m {
            visibility: visible;
            display: block
        }
    }

    .tourHomeSearchPanel {
        transition: all .2s ease-in-out
    }

    .tourHomeSearchPanel .positionPanel {
        position: absolute
    }

    @-moz-document url-prefix() {
        .tourHomeSearchPanel .positionPanel {
            width: 100%
        }
    }

    @media only screen and (min-width: 320px) {
        .tourHomeSearchPanel .positionPanel {
            top: 0
        }
    }

    @media only screen and (min-width: 768px) {
        .tourHomeSearchPanel .positionPanel {
            top: 10px
        }
    }

    .tourHomeSearchPanel:hover {
        cursor: default
    }

    .tourHomeSearchPanel .tourHomeSearchForm {
        padding-top: 15px
    }

    .tourHomeSearchPanel .tourHomeSearchForm .iconPlane {
        position: absolute;
        z-index: 3;
        right: 15px;
        top: -30px;
        display: block
    }

    .tourHomeSearchPanel .tourHomeSearchForm .form-group .control-label {
        color: rgba(255, 255, 255, 0.8)
    }

    .tourHomeSearchPanel .tourHomeIntro {
        color: white
    }

    .tourHomeSearchPanel .tourHomeIntro h1 {
        margin: 0px;
        font-weight: bold;
        font-family: Helvetica;
        font-size: 40px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        color: #ffffff
    }

    @media only screen and (min-width: 320px) {
        .tourHomeSearchPanel .tourHomeIntro h1 {
            font-size: 22px;
            margin-bottom: 15px
        }
    }

    @media only screen and (min-width: 768px) {
        .tourHomeSearchPanel .tourHomeIntro h1 {
            font-size: 40px;
            margin-bottom: 15px;
            height: 38px
        }
    }

    .tourHomeSearchPanel .tourHomeIntro h2 {
        margin-top: 0
    }

    @media only screen and (min-width: 320px) {
        .tourHomeSearchPanel .tourHomeIntro h2 {
            font-size: 16px;
            margin-bottom: 15px
        }
    }

    @media only screen and (min-width: 768px) {
        .tourHomeSearchPanel .tourHomeIntro h2 {
            font-size: 20px;
            margin-bottom: 15px
        }
    }

    .tourHomeSearchPanel .tourHome-tailor {
        position: relative;
        margin-top: 15px
    }

    .tourHomeSearchPanel .tourHome-tailor span {
        color: #fff
    }

    .tourHomeSearchPanel .tourHome-tailor .btn.btn-action {
        display: inline-block;
        margin-left: 15px;
        color: #fff;
        font-size: 14px;
        background-color: rgba(255, 255, 255, 0.3);
        border-color: #fff;
        padding: 7px 11px
    }

    .tourHomeSearchPanel .tourHome-tailor .btn.btn-action:hover,
    .tourHomeSearchPanel .tourHome-tailor .btn.btn-action:focus {
        background-color: rgba(0, 0, 0, 0.3);
        border-color: #F79321
    }

    @media only screen and (max-width: 480px) {
        .tourHomeSearchPanel .tourHome-tailor span {
            display: inline-block;
            width: calc(100% - 120px)
        }

        .tourHomeSearchPanel .tourHome-tailor .btn.btn-action {
            position: absolute;
            right: 15px;
            margin-left: 0
        }
    }

    .bg-white {
        background-color: #fff
    }

    .bg-orange-light {
        background-color: #feeec7
    }

    .wrap-tailor-tour-services {
        background-color: #fff
    }

    .wrap-tailor-tour-services .tailor-tour-services {
        padding: 40px 0 30px
    }

    .wrap-tailor-tour-services .tailor-tour-services .item {
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.15);
        background-color: #feeec7
    }

    .wrap-tailor-tour-services .tailor-tour-services .item img {
        display: inline-block;
        padding: 15px 0
    }

    .wrap-tailor-tour-services .tailor-tour-services .item p {
        padding-bottom: 15px
    }

    @media only screen and (max-width: 768px) {
        .wrap-tailor-tour-services .tailor-tour-services {
            padding: 16px 0 10px
        }

        .wrap-tailor-tour-services .tailor-tour-services .item-left {
            padding-right: 8px
        }

        .wrap-tailor-tour-services .tailor-tour-services .item-right {
            padding-left: 8px
        }
    }

    .wrap-tailor-tour-info {
        padding: 30px 0;
        min-height: 499px
    }

    .wrap-tailor-tour-info .wrap-content {
        display: inline-flex;
        width: 100%
    }

    .wrap-tailor-tour-info .wrap-content .content {
        position: relative;
        width: 50%;
        padding: 0;
        min-height: inherit
    }

    .wrap-tailor-tour-info .wrap-content .content h3 {
        font-size: 38px;
        font-weight: 500;
        color: #003c71;
        margin-bottom: 20px
    }

    .wrap-tailor-tour-info .wrap-content .content h3 img {
        display: inline-block;
        margin-right: 30px
    }

    .wrap-tailor-tour-info .wrap-content .content p {
        font-size: 18px;
        font-weight: 300;
        color: #333333
    }

    .wrap-tailor-tour-info .wrap-content .content h4 {
        color: #333333;
        font-size: 24px;
        margin: 0 0 15px
    }

    .wrap-tailor-tour-info .wrap-content .content h4 span {
        font-size: 14px;
        font-weight: 400;
        display: block;
        margin-top: 5px
    }

    .wrap-tailor-tour-info .wrap-content .content-right {
        padding-left: 30px
    }

    .wrap-tailor-tour-info .wrap-content .text-right img {
        display: inline-block
    }

    .wrap-tailor-tour-info .wrap-content .vertical-align {
        position: absolute;
        width: calc(100% - 30px);
        top: 50%;
        transform: translateY(-50%)
    }

    @media only screen and (max-width: 480px) {
        .wrap-tailor-tour-info .wrap-content .vertical-align {
            position: relative;
            width: 100%;
            top: 0;
            transform: translateY(0)
        }
    }

    @media only screen and (max-width: 480px) {
        .wrap-tailor-tour-info .wrap-content {
            display: block
        }

        .wrap-tailor-tour-info .wrap-content .content {
            width: 100%
        }

        .wrap-tailor-tour-info .wrap-content .content h3 {
            font-size: 24px;
            margin-top: 5px
        }

        .wrap-tailor-tour-info .wrap-content .content h3 img {
            margin-right: 15px
        }

        .wrap-tailor-tour-info .wrap-content .content p {
            font-size: 14px
        }

        .wrap-tailor-tour-info .wrap-content .content-right {
            padding-left: 0
        }
    }

    .wrap-tailor-tour-info .tourHomeContainer h3 {
        font-size: 38px;
        font-weight: 500;
        color: #003c71;
        margin-bottom: 20px
    }

    .wrap-tailor-tour-info .tourHomeContainer h3 img {
        display: inline-block;
        margin-right: 30px
    }

    @media only screen and (max-width: 480px) {
        .wrap-tailor-tour-info .tourHomeContainer h3 {
            font-size: 24px
        }

        .wrap-tailor-tour-info .tourHomeContainer h3 img {
            margin-right: 15px
        }
    }

    .wrap-tailor-tour-info .tourItemBook .control-label {
        color: #333333;
        font-weight: 300;
        font-size: 14px
    }

    .wrap-tailor-tour-info .tourItemBook .btn-request {
        border-radius: 4px;
        padding: 8px 16px
    }

    .wrap-tailor-tour-info .tourItemBook .btn-request span {
        font-size: 14px;
        font-weight: normal;
        display: block
    }

    .wrap-tailor-tour-review .customerReview .tourDetailTitle {
        color: #003C71;
        font-size: 16px;
        font-weight: bold
    }

    .wrap-tailor-tour-review .customerReview .recentReviews {
        font-weight: bold;
        font-size: 16px
    }

    .wrap-tailor-tour-review .customerReview .verticalLine {
        margin-left: 3px;
        border-left: 1px solid #26BED6;
        line-height: 10px;
        padding: 1px 8px
    }

    .wrap-tailor-tour-review .customerReview .review-image-wrap {
        max-height: 90px;
        overflow: hidden
    }

    .wrap-tailor-tour-review .customerReview .replyReviewContent {
        font-style: italic;
        font-size: 14px;
        margin-top: 10px;
        background: #f4f4f4;
        padding: 15px;
        border-radius: 6px
    }

    .wrap-tailor-tour-review .customerReview .customerReviewHeader span.scoreSpan {
        border-radius: 5px;
        padding: 10px 15px;
        color: #FFFFFF;
        background-color: #9FC43A;
        font-size: 18px
    }

    .wrap-tailor-tour-review .customerReview .customerReviewHeader span.scoreStatus {
        font-size: 16px;
        font-weight: bold;
        color: #26BED6
    }

    .wrap-tailor-tour-review .customerReview .customerReviewHeader span.scoreReviewQuantity {
        font-size: 12px;
        color: #26BED6
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail .horizontalLine {
        border-bottom: 1px solid #ddd;
        margin: 8px 0px
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail .customerReviewName {
        color: #333;
        font-weight: bold
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreSpan {
        border-radius: 3px;
        padding: 3px 5px 2px 5px;
        color: #FFFFFF;
        background-color: #9FC43A;
        font-size: 13px
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreStatus {
        font-size: 13px;
        font-weight: bold;
        color: #26BED6
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail span.scoreReviewDate {
        font-size: 12px;
        color: #CDCCCB;
        margin-left: 10px
    }

    .wrap-tailor-tour-review .customerReview .customerReviewDetailContainer .customerReviewDetail .customerReviewContent {
        font-style: italic
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery {
        margin-top: 4px;
        max-width: 960px;
        overflow: hidden;
        padding: 0
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery li {
        float: left;
        width: 84px;
        height: 84px;
        overflow: hidden;
        margin: 2px;
        cursor: pointer
    }

    @media screen and (max-width: 768px) {
        .wrap-tailor-tour-review .customerReview .user-img-gallery li {
            width: calc(100%/3.14)
        }
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery li img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery .overlay-text {
        -webkit-transform: translate(0, -100%);
        -ms-transform: translate(0, -100%);
        transform: translate(0, -100%);
        font-size: 12px;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height: 100%;
        font-weight: bold;
        text-align: center
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery .overlay-text span {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery .overlay-text span.desc-img {
        visibility: visible
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery .hover {
        opacity: 0;
        transition: .3s ease;
        font-weight: normal
    }

    .wrap-tailor-tour-review .customerReview .user-img-gallery .hover:hover {
        opacity: 1
    }

    .wrap-tailor-tour-review .customerReview .more-img {
        display: none
    }

    .wrap-tailor-tour-review .customerReview .htdt-rev-showmore {
        display: block;
        text-align: center
    }

    .wrap-tailor-tour-review .customerReview .htdt-rev-showmore .htdt-rev-showmore-btn {
        border: 1px solid #2574A9;
        display: inline-block;
        margin-top: 15px;
        padding: 8px 30px;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px
    }

    .ivivu-slider-overlay {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0.91;
        filter: alpha(opacity=91);
        z-index: 99;
        display: none
    }

    .ivivu-slider {
        position: fixed;
        width: 100%;
        z-index: 199;
        display: none;
        top: 50% !important;
        left: 50% !important;
        -webkit-transform: translateY(-50%, -50%);
        -ms-transform: translateY(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .ivivu-slider .ivivu-slider_in {
        position: relative;
        text-align: center
    }

    .ivivu-slider .ivivu-slider_in .ivivu-slider_close {
        right: calc((100% - 1125px) / 2);
        display: inline-block;
        width: 26px;
        height: 26px;
        background: url(/du-lich/content/img/close.png) no-repeat;
        z-index: 100;
        display: none;
        top: -38px;
        position: absolute
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .ivivu-slider_close {
            right: 10px
        }
    }

    .ivivu-slider .ivivu-slider_in img {
        max-height: calc(100vh - 200px)
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in img {
            max-width: 100%
        }
    }

    .ivivu-slider .ivivu-slider_in .view-description {
        position: absolute;
        color: white;
        bottom: 15px;
        display: table;
        margin: 0 auto;
        width: 100%;
        font-size: 16px;
        text-shadow: 1px 1px black
    }

    .ivivu-slider .ivivu-slider_in .prev,
    .ivivu-slider .ivivu-slider_in .next {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        cursor: pointer
    }

    .ivivu-slider .ivivu-slider_in .next {
        right: 12%;
        background: url(/du-lich/content/img/arrow-right.png) no-repeat;
        background-size: 100%
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .next {
            right: 5px
        }
    }

    .ivivu-slider .ivivu-slider_in .prev {
        left: 12%;
        background: url(/du-lich/content/img/arrow-left.png) no-repeat;
        background-size: 100%
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider .ivivu-slider_in .prev {
            left: 5px
        }
    }

    .ivivu-slider_indicators {
        position: fixed;
        left: 0;
        bottom: 15px;
        width: 100%;
        z-index: 299;
        height: 84px;
        text-align: center;
        display: none
    }

    .ivivu-slider_indicators .horizal-thumbnail {
        width: 1125px;
        text-align: left;
        display: inline-block;
        margin-left: -17px;
        overflow: auto
    }

    .ivivu-slider_indicators .horizal-thumbnail .thumbnail-images {
        display: inline-flex
    }

    @media screen and (max-width: 1100px) {
        .ivivu-slider_indicators .horizal-thumbnail {
            width: 100%
        }
    }

    .ivivu-slider_indicators img {
        height: 100%;
        width: 100%;
        object-fit: cover
    }

    .ivivu-slider_indicators a {
        display: inline-block;
        width: 84px;
        height: 84px;
        margin: 6px 4px 0px 0px;
        box-shadow: 0 0 2px #000;
        filter: alpha(opacity=50);
        opacity: 0.5;
        overflow: hidden;
        text-align: center
    }

    .ivivu-slider_indicators .current {
        filter: alpha(opacity=100);
        opacity: 1
    }

    @media only screen and (max-width: 767px) {
        .md-margin-bottom-15 {
            margin-bottom: 15px
        }
    }

    .whyIvivu__tour {
        padding-top: 20px;
        padding-bottom: 20px
    }

    .recentSearch {
        visibility: visible;
        padding-top: 0px;
        padding-bottom: 30px;
        background-color: #ecf0f5
    }

    @media only screen and (min-width: 320px) {
        .recentSearch {
            display: none
        }
    }

    @media only screen and (min-width: 480px) {
        .recentSearch {
            display: block
        }
    }

    .recentSearch .recentSearchWrapper {
        display: flex;
        flex-flow: column;
        align-content: flex-start
    }

    .recentSearch .recentSearchWrapper .recent-row,
    .recentSearch .recentSearchWrapper .recent-col {
        display: flex;
        flex-wrap: wrap
    }

    .recentSearch .recentSearchWrapper a {
        display: flex;
        width: 100%
    }

    .recentSearch .recentSearchWrapper a .card {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all .2s ease-in-out;
        background-color: white;
        margin: 10px 0px;
        flex: 1 0 0
    }

    .recentSearch .recentSearchWrapper a .card .card-item {
        display: flex;
        height: 100%;
        transition: all .2s ease-in-out;
        -webkit-tap-highlight-color: rgba(0, 135, 245, 0)
    }

    .recentSearch .recentSearchWrapper a .card .card-item:hover {
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
        box-shadow: 0 0 16px 0 rgba(38, 190, 214, 0.8)
    }

    .recentSearch .recentSearchWrapper a .card .card-item .v-ribbon {
        position: absolute;
        left: 31px
    }

    .recentSearch .recentSearchWrapper a .card .card-item img {
        width: 120px;
        height: 120px
    }

    .recentSearch .recentSearchWrapper a .card .card-item .card-content {
        padding: 10px 0px 5px 10px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        flex: 1
    }

    .recentSearch .recentSearchWrapper a .card .card-item .card-content p {
        font-weight: bold;
        line-height: 1.4;
        margin: 0px
    }

    .recentSearch .recentSearchWrapper a .card .card-item .card-content .card-name {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        flex: 1;
        color: #003C71
    }

    .recentSearch .recentSearchWrapper a .card .card-item .card-content .card-price {
        text-align: right;
        font-size: 16px;
        color: #26bed6
    }

    .recentSearch .recentSearchWrapper a .card .card-item .card-removal button {
        z-index: 3
    }

    .recentSearch .itemList {
        display: flex;
        flex-wrap: wrap;
        flex: 1
    }

    .recentSearch .itemList .row.container:before,
    .recentSearch .itemList .row.container:after,
    .recentSearch .itemList .row.row:before,
    .recentSearch .itemList .row.row:after {
        content: normal
    }

    .recentSearch .itemList .row,
    .recentSearch .itemList .flex-row {
        transition: all .2s ease-in-out
    }

    .recentSearch .itemList .row>div,
    .recentSearch .itemList .flex-row>div {
        transition: all .2s ease-in-out
    }

    .recentSearch .itemList .row .item,
    .recentSearch .itemList .flex-row .item {
        margin-bottom: 15px
    }

    .recentSearch .itemList .row .item p,
    .recentSearch .itemList .flex-row .item p {
        margin: 0px
    }

    .recentSearch .itemList .row .item a,
    .recentSearch .itemList .flex-row .item a {
        transition: all .2s ease-in-out;
        background-color: white;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
        flex: 1;
        -webkit-tap-highlight-color: rgba(0, 135, 245, 0)
    }

    .recentSearch .itemList .row .item a .itemContentDiv,
    .recentSearch .itemList .flex-row .item a .itemContentDiv {
        padding: 10px 10px 2px 10px;
        display: flex;
        flex-wrap: wrap;
        flex: 1;
        flex-direction: column;
        font-weight: bold
    }

    .recentSearch .itemList .row .item a .itemContentDiv .itemName,
    .recentSearch .itemList .flex-row .item a .itemContentDiv .itemName {
        font-size: 14px;
        line-height: 1.4;
        color: #494b55;
        display: flex;
        flex-wrap: wrap;
        flex: 1
    }

    .recentSearch .itemList .row .item a .itemContentDiv .itemPrice,
    .recentSearch .itemList .flex-row .item a .itemContentDiv .itemPrice {
        text-align: right;
        font-size: 16px
    }

    .recentSearch .itemList .row .item a:hover,
    .recentSearch .itemList .flex-row .item a:hover {
        background-color: rgba(241, 241, 242, 0.8)
    }

    .ls-tour-groups {
        padding-left: 0;
        margin: 0
    }

    .ls-tour-groups .wrap-background {
        display: block
    }

    .ls-tour-groups .wrap-background:first-child {
        background-color: #feeec7
    }

    .ls-tour-groups .wrap-background:nth-child(even) {
        background: #f6f8fA
    }

    .bg-gray1 {
        background-color: #f6f8fA
    }

    .tourHomeContainer .title-group {
        font-size: 32px;
        font-weight: bold;
        color: #3f3b3b;
        margin-bottom: 22px
    }

    .tourHomeContainer .title-group span {
        font-size: 16px;
        font-weight: normal;
        color: #717484;
        display: block;
        margin-top: 6px
    }

    @media only screen and (max-width: 767px) {
        .tourHomeContainer .title-group {
            font-size: 24px
        }
    }

    @media only screen and (max-width: 390px) {
        .tourHomeContainer .title-group {
            font-size: 22px
        }
    }

    .tourHomeContainer .text-center {
        display: block !important
    }

    .tourHomeContainer .btn-readmore {
        display: inline-block;
        color: #26bed6;
        font-size: 18px;
        font-weight: bold;
        border-radius: 2px;
        border: solid 1px #26bed6;
        background-color: #fff;
        padding: 7px 20px;
        margin-bottom: 15px
    }

    .tourHomeContainer .btn-readmore:hover,
    .tourHomeContainer .btn-readmore:focus {
        background-color: #26bed6;
        border-color: #26bed6;
        color: #fff
    }

    .tourHomeContainer .ico-readmore {
        position: absolute;
        top: 20px;
        right: 0
    }

    .tourHomeContainer .vcolor-info {
        color: #f79321
    }

    @media only screen and (min-width: 320px) {
        .tourHomeContainer .hotDealContainer {
            border: none;
            background: none
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHomeContainer .hotDealContainer {
            background: rgba(217, 83, 79, 0.05);
            border: 2px dashed rgba(217, 83, 79, 0.15)
        }
    }

    @media only screen and (min-width: 320px) {
        .tourHomeContainer .localTourContainer {
            border: none;
            background: none
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHomeContainer .localTourContainer {
            border: 2px dashed rgba(0, 60, 113, 0.15);
            background: rgba(0, 60, 113, 0.05)
        }
    }

    @media only screen and (min-width: 320px) {
        .tourHomeContainer .foreignTourContainer {
            border: none;
            background: none
        }
    }

    @media only screen and (min-width: 480px) {
        .tourHomeContainer .foreignTourContainer {
            background: rgba(38, 190, 214, 0.05);
            border: 2px dashed rgba(38, 190, 214, 0.15)
        }
    }

    @media only screen and (min-width: 320px) {
        .tourHomeContainer .row {
            display: block
        }

        .tourHomeContainer .row>div {
            display: block;
            justify-content: space-between
        }

        .tourHomeContainer .row .cardItem {
            display: block
        }

        .tourHomeContainer .row .cardItem a {
            display: block
        }

        .tourHomeContainer .row .cardItem .cardItemContainer {
            display: block
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent {
            display: block
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div {
            display: block
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div .cardItemTourNameDiv {
            display: block
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div .transportDiv {
            display: block
        }
    }

    @media only screen and (min-width: 350px) {

        .tourHomeContainer .row.container:before,
        .tourHomeContainer .row.container:after,
        .tourHomeContainer .row.row:before,
        .tourHomeContainer .row.row:after {
            content: normal
        }

        .tourHomeContainer .row {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourHomeContainer .row>div {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .tourHomeContainer .row .cardItem {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourHomeContainer .row .cardItem a {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourHomeContainer .row .cardItem .cardItemContainer {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            flex-direction: column;
            justify-content: flex-end
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            justify-content: flex-start
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div {
            display: flex;
            flex-wrap: wrap;
            flex: 1;
            justify-content: flex-start;
            flex-direction: column
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div .cardItemTourNameDiv {
            display: flex;
            flex-wrap: wrap;
            flex: 1
        }

        .tourHomeContainer .row .cardItem .cardItemContainer .cardItemContent>div .transportDiv {
            display: block
        }
    }

    @media only screen and (max-width: 767px) {
        .tourHomeContainer .row.item-m {
            scroll-behavior: smooth;
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 0 15px;
            scrollbar-width: none;
            -ms-overflow-style: none
        }

        .tourHomeContainer .row.item-m::-webkit-scrollbar {
            display: none
        }

        .tourHomeContainer .row.item-m>div {
            flex: 0 0 auto;
            padding: 0;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            width: 310px;
            margin-right: 20px
        }

        .tourHomeContainer .row.item-m>div:last-child {
            margin-right: 0
        }
    }

    @media only screen and (max-width: 767px) and (max-width: 375px) {
        .tourHomeContainer .row.item-m>div {
            width: 290px
        }
    }

    .popularTourDiv2 {
        background-color: #fff;
        padding-bottom: 15px
    }

    @media only screen and (min-width: 320px) {
        .popularTourDiv2 .container .popularTourContainer {
            border: none;
            background: none
        }
    }

    @media only screen and (max-width: 480px) {
        .popularTourDiv2 .container .popularTourContainer .row {
            margin-left: -3px;
            margin-right: -3px
        }

        .popularTourDiv2 .container .popularTourContainer .row .item-m {
            padding-left: 3px;
            padding-right: 3px
        }
    }

    .popularTourDiv2 .container .popularTourContainer .popularTourList>div {
        display: block
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer {
        display: block
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage {
        -webkit-box-shadow: inset 0px 0px 100px #000014;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1)
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter {
        width: 100%;
        height: 120px;
        background-color: transparent;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.3) 30%, rgba(0, 0, 0, 0.01) 50%, transparent 100%)
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner {
        padding: 5px 5px 5px 15px;
        width: 100%;
        position: absolute;
        bottom: 0
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner span {
        font-weight: normal
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner .tourCount {
        font-weight: normal;
        font-size: 16px;
        display: block
    }

    @media only screen and (min-width: 320px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner span {
            font-size: 14px
        }
    }

    @media only screen and (min-width: 480px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner span {
            font-size: 22px
        }
    }

    @media only screen and (min-width: 768px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage .cardItemPriceDivOuter .cardItemPriceDivInner span {
            font-size: 30px;
            font-weight: bold
        }
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img {
        transition: all .3s ease-in-out
    }

    @media only screen and (min-width: 320px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img {
            height: 120px
        }
    }

    @media only screen and (min-width: 480px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img {
            height: 225px
        }
    }

    @media only screen and (min-width: 320px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img.col {
            height: 246px
        }
    }

    @media only screen and (min-width: 480px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img.col {
            height: 480px
        }
    }

    .popularTourDiv2 .container .popularTourContainer .cardItem .cardItemContainer .cardItemImage img:hover {
        opacity: 0.9;
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    @media only screen and (max-width: 480px) {
        .popularTourDiv2 .container .popularTourContainer .cardItem {
            padding-bottom: 6px
        }
    }

    .score-container__inner {
        float: left
    }

    .score-container__inner .score {
        padding: 3px 5px;
        border-radius: 6px;
        background: #9fc43a;
        color: #fff;
        font-weight: bold
    }

    .score-container__inner .score-description {
        color: #9fc43a;
        font-weight: bold
    }

    @media only screen and (max-width: 768px) {
        .tour-modal-fullframe {
            font-size: 16px;
            color: #555863;
            z-index: 2147483647 !important;
            position: fixed;
            overflow: hidden !important
        }

        .tour-modal-fullframe .modal-backdrop {
            overflow: hidden !important
        }

        .tour-modal-fullframe.centered-modal {
            transition: opacity .0s ease-in-out
        }

        .tour-modal-fullframe.centered-modal.in {
            display: flex !important
        }

        .tour-modal-fullframe.centered-modal .modal-dialog {
            align-self: center
        }

        .tour-modal-fullframe .modal-dialog {
            margin: 0;
            padding: 0;
            top: 0 !important
        }
    }

    @media only screen and (max-width: 768px) and (max-width: 768px) and (min-width: 768px) {
        .tour-modal-fullframe .modal-dialog {
            width: 400px
        }
    }

    .search-form .tour-list .popup-searchcontent-mb {
        display: none
    }

    @media only screen and (max-width: 768px) {
        .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s
        }

        .slideOut {
            -webkit-animation-name: slideOut !important;
            animation-name: slideOut !important;
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s
        }

        @-webkit-keyframes slideIn {
            from {
                bottom: -400px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -400px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes slideOut {
            from {
                bottom: 0;
                opacity: 1
            }

            to {
                bottom: -400px;
                opacity: 0
            }
        }

        @keyframes slideOut {
            from {
                bottom: 0;
                opacity: 1
            }

            to {
                bottom: -400px;
                opacity: 0
            }
        }

        .tour-modal-fullframe .modal-content {
            border-radius: unset;
            box-shadow: none;
            border: none;
            height: 100vh;
            height: calc(var(--vh, 1vh) * 100);
            transition: 1s;
            overflow: hidden
        }

        .tour-modal-fullframe .modal-content .search-form {
            background: none;
            padding: 0px 16px !important
        }

        .tour-modal-fullframe .modal-content .search-form .v_field {
            box-shadow: none
        }

        .tour-modal-fullframe .modal-content .search-form .icon-ic_ivivu_user_location {
            float: left;
            padding-right: 10px;
            font-size: 20px;
            margin-left: -2px
        }

        .tour-modal-fullframe .modal-content .search-form .search-result__description {
            color: #26bed6
        }

        .tour-modal-fullframe .modal-content .search-form .search-input {
            height: 50px;
            border-radius: 6px;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2) !important;
            border: solid 1px #c6d2db;
            background-color: #fff !important
        }

        .tour-modal-fullframe .modal-content .search-form .input-icon-close {
            float: right;
            right: 15px;
            color: #ccc
        }

        .tour-modal-fullframe .modal-content .search-form .typeahead-container .tt-menu {
            box-shadow: none;
            height: calc(90vh - 150px);
            overflow-y: scroll;
            overflow-x: hidden;
            width: 109%;
            margin-left: -16px
        }

        .tour-modal-fullframe .modal-content .search-form .typeahead-container .tt-menu .tt-dataset .title-mb {
            height: 43px;
            width: 100%;
            background: #f2f2f2;
            display: flex;
            align-items: center;
            margin-top: 8px
        }

        .tour-modal-fullframe .modal-content .search-form .typeahead-container .tt-menu .tt-dataset .title-mb .dataTitleMobile {
            font-family: Helvetica;
            font-size: 18px;
            line-height: 1.5;
            text-align: left;
            color: #3f3b3b;
            padding-left: 16px
        }

        .tour-modal-fullframe .modal-content .search-form .typeahead-container .tt-menu .tt-dataset .tt-suggestion {
            padding: 15px 16px
        }

        .tour-modal-fullframe .modal-body {
            padding: 0px;
            height: calc(100% - 80px)
        }

        .tour-modal-fullframe .modal-body .header-title {
            padding: 10px 10px 8px 10px !important
        }

        .tour-modal-fullframe .modal-body .back-fullframe {
            float: left;
            background: none;
            border: none
        }

        .tour-modal-fullframe .modal-body .back-fullframe i {
            font-size: 13px;
            position: absolute
        }

        .tour-modal-fullframe .modal-footer {
            border-top-width: 0px;
            padding: 0px;
            padding-left: 20px;
            padding-right: 20px
        }

        .tour-modal-fullframe .modal-footer .btn {
            height: 60px;
            border-radius: 4px !important
        }

        .tour-modal-fullframe .modal-footer .btn h3 {
            font-size: 18px
        }

        .tour-modal-fullframe .modal__title {
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b;
            font-size: 20px;
            text-align: center;
            margin: 0
        }

        .tour-modal-fullframe .modal__container {
            display: flex
        }

        .tour-modal-fullframe .modal__sidebar {
            padding: 30px;
            background: #F9FBFC;
            border-radius: 0px 6px 6px 0px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: all .15s ease-in-out
        }

        .tour-modal-fullframe .modal__sidebar .promotion-text {
            font-size: 18px;
            line-height: 1.3
        }

        .tour-modal-fullframe .modal__sidebar .promotion-text .highlight {
            color: #E52822
        }

        .tour-modal-fullframe .modal__sidebar a {
            color: #555863;
            text-decoration: underline
        }

        .tour-modal-fullframe .modal__sidebar .item-1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 1
        }

        .tour-modal-fullframe .modal__main {
            height: calc(100vh - 200px)
        }
    }

    @media only screen and (max-width: 768px) and (max-width: 768px) and (min-width: 320px) {
        .tour-modal-fullframe .modal__main {
            padding: 0px 0px 10px 0px
        }
    }

    @media only screen and (max-width: 768px) and (max-width: 768px) and (min-width: 480px) {
        .tour-modal-fullframe .modal__main {
            padding: 30px
        }
    }

    @media only screen and (max-width: 768px) {
        .tour-modal-fullframe .modal__main .form-control-feedback {
            font-size: 24px
        }

        .handleBarsPopularLocationItem .media .media-body .media-heading {
            font-family: Helvetica;
            float: none !important;
            font-size: 20px !important;
            font-weight: bold;
            line-height: 1.5;
            color: #3f3b3b
        }

        .mobile-tour-count {
            font-family: Helvetica;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: left;
            color: #828282
        }
    }

    @media only screen and (max-width: 768px) {
        .tour-modal-fullframe .modal__list {
            border-radius: 6px;
            border: 1px solid rgba(85, 88, 99, 0.2);
            padding: 0px
        }

        .tour-modal-fullframe .modal__list--item {
            margin: 0px;
            padding: 10px 15px
        }

        .tour-modal-fullframe .modal__list--item:not(:last-child) {
            border-bottom: 1px solid rgba(85, 88, 99, 0.2)
        }

        .tour-modal-fullframe .control-label {
            font-size: 14px;
            font-weight: normal
        }

        .tour-modal-fullframe .date-input-group .icon {
            font-size: 16px;
            position: absolute;
            margin-left: 10px;
            margin-top: 9px
        }

        .tour-modal-fullframe .date-input-group input {
            padding-left: 35px
        }

        .tour-modal-fullframe .form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            box-shadow: inset 0 0 0 0 white
        }

        .tour-modal-fullframe.overflow-auto {
            overflow: auto
        }

        .tour-modal-fullframe.overflow-auto .modal-footer {
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px
        }

        .tour-modal-fullframe.overflow-auto .modal-content {
            overflow: auto
        }

        .icon-close {
            color: #828282;
            font-size: 16px !important;
            left: 32px;
            top: 16px
        }
    }
</style>





        <?php include 'inc/js.php'; ?>
        <?php include 'inc/footer.php'; ?>