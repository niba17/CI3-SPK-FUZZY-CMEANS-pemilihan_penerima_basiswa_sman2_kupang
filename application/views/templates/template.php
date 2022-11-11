<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style id="apexcharts-css">
    .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
    }


    /* scrollbar is not visible by default for legend, hence forcing the visibility */
    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    }


    .apexcharts-inner {
        position: relative;
    }

    .apexcharts-text tspan {
        font-family: inherit;
    }

    .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.20;
    }

    .apexcharts-series-collapsed {
        opacity: 0;
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
    }

    .apexcharts-tooltip * {
        font-family: inherit;
    }


    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #ECEFF1;
        border-bottom: 1px solid #ddd;
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
    }

    .apexcharts-tooltip-text-y-value,
    .apexcharts-tooltip-text-goals-value,
    .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
    }

    .apexcharts-tooltip-title:empty,
    .apexcharts-tooltip-text-y-label:empty,
    .apexcharts-tooltip-text-y-value:empty,
    .apexcharts-tooltip-text-goals-label:empty,
    .apexcharts-tooltip-text-goals-value:empty,
    .apexcharts-tooltip-text-z-value:empty {
        display: none;
    }

    .apexcharts-tooltip-text-y-value,
    .apexcharts-tooltip-text-goals-value,
    .apexcharts-tooltip-text-z-value {
        font-weight: 600;
    }

    .apexcharts-tooltip-text-goals-label,
    .apexcharts-tooltip-text-goals-value {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-goals-group,
    .apexcharts-tooltip-text-goals-label,
    .apexcharts-tooltip-text-goals-value {
        display: flex;
    }

    .apexcharts-tooltip-text-goals-label:not(:empty),
    .apexcharts-tooltip-text-goals-value:not(:empty) {
        margin-top: -6px;
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1;
    }

    .apexcharts-tooltip-series-group.apexcharts-active,
    .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
    }

    .apexcharts-tooltip-box,
    .apexcharts-custom-tooltip {
        padding: 4px 8px;
    }

    .apexcharts-tooltip-boxPlot {
        display: flex;
        flex-direction: column-reverse;
    }

    .apexcharts-tooltip-box>div {
        margin: 4px 0;
    }

    .apexcharts-tooltip-box span.value {
        font-weight: bold;
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
        transition: 0.15s ease all;
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-xaxistooltip:after,
    .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
    }

    .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
    }

    .apexcharts-xaxistooltip-bottom:after,
    .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
    }

    .apexcharts-xaxistooltip-top:after,
    .apexcharts-xaxistooltip-top:before {
        top: 100%;
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #ECEFF1;
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #ECEFF1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90A4AE;
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #ECEFF1;
        border: 1px solid #90A4AE;
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .apexcharts-yaxistooltip:after,
    .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
    }

    .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
    }

    .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
    }

    .apexcharts-yaxistooltip-left:after,
    .apexcharts-yaxistooltip-left:before {
        left: 100%;
    }

    .apexcharts-yaxistooltip-right:after,
    .apexcharts-yaxistooltip-right:before {
        right: 100%;
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #ECEFF1;
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90A4AE;
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
    }

    .apexcharts-yaxistooltip-hidden {
        display: none;
    }

    .apexcharts-xcrosshairs,
    .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
    }

    .apexcharts-xcrosshairs.apexcharts-active,
    .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0;
    }

    .apexcharts-selection-rect {
        cursor: move;
    }

    .svg_select_boundingRect,
    .svg_select_points_rot {
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_boundingRect,
    .apexcharts-selection-rect+g .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
    }

    .apexcharts-selection-rect+g .svg_select_points_l,
    .apexcharts-selection-rect+g .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
    }

    .svg_select_points {
        fill: #efefef;
        stroke: #333;
        rx: 2;
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-pan {
        cursor: move
    }

    .apexcharts-zoom-icon,
    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon,
    .apexcharts-reset-icon,
    .apexcharts-pan-icon,
    .apexcharts-selection-icon,
    .apexcharts-menu-icon,
    .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6E8192;
        text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoomin-icon svg,
    .apexcharts-zoomout-icon svg,
    .apexcharts-reset-icon svg,
    .apexcharts-menu-icon svg {
        fill: #6E8192;
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76)
    }

    .apexcharts-theme-dark .apexcharts-zoom-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
    .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
    .apexcharts-theme-dark .apexcharts-reset-icon svg,
    .apexcharts-theme-dark .apexcharts-pan-icon svg,
    .apexcharts-theme-dark .apexcharts-selection-icon svg,
    .apexcharts-theme-dark .apexcharts-menu-icon svg,
    .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
    }

    .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008FFB;
    }

    .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
    .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
    .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
    .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
    .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
    }

    .apexcharts-selection-icon,
    .apexcharts-menu-icon {
        position: relative;
    }

    .apexcharts-reset-icon {
        margin-left: 5px;
    }

    .apexcharts-zoom-icon,
    .apexcharts-reset-icon,
    .apexcharts-menu-icon {
        transform: scale(0.85);
    }

    .apexcharts-zoomin-icon,
    .apexcharts-zoomout-icon {
        transform: scale(0.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px;
    }

    .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6E8192;
        stroke-width: 2;
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008FFB;
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    @media screen and (min-width: 768px) {
        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1;
        }
    }

    .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-pie-label,
    .apexcharts-datalabels,
    .apexcharts-datalabel,
    .apexcharts-datalabel-label,
    .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
    }

    .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
    }

    .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
    }

    .apexcharts-gridline,
    .apexcharts-annotation-rect,
    .apexcharts-xaxis-annotation-label,
    .apexcharts-yaxis-annotation-label,
    .apexcharts-point-annotation-label,
    .apexcharts-tooltip .apexcharts-marker,
    .apexcharts-area-series .apexcharts-area,
    .apexcharts-line,
    .apexcharts-zoom-rect,
    .apexcharts-toolbar svg,
    .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
    .apexcharts-radar-series path,
    .apexcharts-radar-series polygon {
        pointer-events: none;
    }


    /* markers */

    .apexcharts-marker {
        transition: 0.15s ease all;
    }

    @keyframes opaque {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }


    /* Resize generated styles */

    @keyframes resizeanim {
        from {
            opacity: 0;
        }

        to {
            opacity: 0;
        }
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
    }

    .resize-triggers,
    .resize-triggers>div,
    .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
    }

    .resize-triggers>div {
        background: #eee;
        overflow: auto;
    }

    .contract-trigger:before {
        width: 200%;
        height: 200%;
    }
    </style>
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between"> <a href="index.html"
                class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span
                    class="d-none d-lg-block">NiceAdmin</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text"
                    name="query" placeholder="Search" title="Enter search keyword"> <button type="submit"
                    title="Search"><i class="bi bi-search"></i></button></form>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i
                            class="bi bi-search"></i> </a></li>
                <li class="nav-item dropdown"> <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i
                            class="bi bi-bell"></i> <span class="badge bg-primary badge-number">4</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header"> You have 4 new notifications <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item"> <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item"> <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item"> <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="notification-item"> <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"> <i
                            class="bi bi-chat-left-text"></i> <span class="badge bg-success badge-number">3</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header"> You have 3 new messages <a href="#"><span
                                    class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item"> <a href="#"> <img src="assets/img/messages-1.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item"> <a href="#"> <img src="assets/img/messages-2.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="message-item"> <a href="#"> <img src="assets/img/messages-3.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer"> <a href="#">Show all messages</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown pe-3"> <a class="nav-link nav-profile d-flex align-items-center pe-0"
                        href="#" data-bs-toggle="dropdown"> <img src="assets/img/profile-img.jpg" alt="Profile"
                            class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">K.
                            Anderson</span> </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6> <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-person"></i> <span>My Profile</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="users-profile.html"> <i
                                    class="bi bi-gear"></i> <span>Account Settings</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="pages-faq.html"> <i
                                    class="bi bi-question-circle"></i> <span>Need Help?</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i
                                    class="bi bi-box-arrow-right"></i> <span>Sign Out</span> </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item"> <a class="nav-link " href="index.html"> <i class="bi bi-grid"></i>
                    <span>Dashboard</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#components-nav"
                    data-bs-toggle="collapse" href="#" aria-expanded="false"> <i
                        class="bi bi-menu-button-wide"></i><span>Components</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
                    <li> <a href="components-alerts.html"> <i class="bi bi-circle"></i><span>Alerts</span> </a></li>
                    <li> <a href="components-accordion.html"> <i class="bi bi-circle"></i><span>Accordion</span> </a>
                    </li>
                    <li> <a href="components-badges.html"> <i class="bi bi-circle"></i><span>Badges</span> </a></li>
                    <li> <a href="components-breadcrumbs.html"> <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                        </a></li>
                    <li> <a href="components-buttons.html"> <i class="bi bi-circle"></i><span>Buttons</span> </a></li>
                    <li> <a href="components-cards.html"> <i class="bi bi-circle"></i><span>Cards</span> </a></li>
                    <li> <a href="components-carousel.html"> <i class="bi bi-circle"></i><span>Carousel</span> </a></li>
                    <li> <a href="components-list-group.html"> <i class="bi bi-circle"></i><span>List group</span> </a>
                    </li>
                    <li> <a href="components-modal.html"> <i class="bi bi-circle"></i><span>Modal</span> </a></li>
                    <li> <a href="components-tabs.html"> <i class="bi bi-circle"></i><span>Tabs</span> </a></li>
                    <li> <a href="components-pagination.html"> <i class="bi bi-circle"></i><span>Pagination</span> </a>
                    </li>
                    <li> <a href="components-progress.html"> <i class="bi bi-circle"></i><span>Progress</span> </a></li>
                    <li> <a href="components-spinners.html"> <i class="bi bi-circle"></i><span>Spinners</span> </a></li>
                    <li> <a href="components-tooltips.html"> <i class="bi bi-circle"></i><span>Tooltips</span> </a></li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                    href="#" aria-expanded="false"> <i class="bi bi-journal-text"></i><span>Forms</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="forms-elements.html"> <i class="bi bi-circle"></i><span>Form Elements</span> </a></li>
                    <li> <a href="forms-layouts.html"> <i class="bi bi-circle"></i><span>Form Layouts</span> </a></li>
                    <li> <a href="forms-editors.html"> <i class="bi bi-circle"></i><span>Form Editors</span> </a></li>
                    <li> <a href="forms-validation.html"> <i class="bi bi-circle"></i><span>Form Validation</span> </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                    href="#" aria-expanded="false"> <i
                        class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="tables-general.html"> <i class="bi bi-circle"></i><span>General Tables</span> </a>
                    </li>
                    <li> <a href="tables-data.html"> <i class="bi bi-circle"></i><span>Data Tables</span> </a></li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                    href="#" aria-expanded="false"> <i class="bi bi-bar-chart"></i><span>Charts</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="charts-chartjs.html"> <i class="bi bi-circle"></i><span>Chart.js</span> </a></li>
                    <li> <a href="charts-apexcharts.html"> <i class="bi bi-circle"></i><span>ApexCharts</span> </a></li>
                    <li> <a href="charts-echarts.html"> <i class="bi bi-circle"></i><span>ECharts</span> </a></li>
                </ul>
            </li>
            <li class="nav-item"> <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                    href="#" aria-expanded="false"> <i class="bi bi-gem"></i><span>Icons</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="icons-bootstrap.html"> <i class="bi bi-circle"></i><span>Bootstrap Icons</span> </a>
                    </li>
                    <li> <a href="icons-remix.html"> <i class="bi bi-circle"></i><span>Remix Icons</span> </a></li>
                    <li> <a href="icons-boxicons.html"> <i class="bi bi-circle"></i><span>Boxicons</span> </a></li>
                </ul>
            </li>
            <li class="nav-heading">Pages</li>
            <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i>
                    <span>Profile</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-faq.html"> <i
                        class="bi bi-question-circle"></i> <span>F.A.Q</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-contact.html"> <i
                        class="bi bi-envelope"></i> <span>Contact</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-register.html"> <i
                        class="bi bi-card-list"></i> <span>Register</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-login.html"> <i
                        class="bi bi-box-arrow-in-right"></i> <span>Login</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-error-404.html"> <i
                        class="bi bi-dash-circle"></i> <span>Error 404</span> </a></li>
            <li class="nav-item"> <a class="nav-link collapsed" href="pages-blank.html"> <i
                        class="bi bi-file-earmark"></i> <span>Blank</span> </a></li>
        </ul>
    </aside>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6> <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Revenue <span>| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6> <span class="text-success small pt-1 fw-bold">8%</span>
                                            <span class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6> <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>
                                    <div id="reportsChart" style="min-height: 365px;">
                                        <div id="apexcharts5k0cvtoi"
                                            class="apexcharts-canvas apexcharts5k0cvtoi apexcharts-theme-light"
                                            style="width: 672px; height: 350px;"><svg id="SvgjsSvg2206" width="672"
                                                height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="672" height="350">
                                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                        <div class="apexcharts-legend-series" rel="1" seriesname="Sales"
                                                            data:collapsed="false" style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="1"
                                                                data:collapsed="false"
                                                                style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="1" i="0"
                                                                data:default-text="Sales" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            seriesname="Revenue" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="2"
                                                                data:collapsed="false"
                                                                style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="2" i="1"
                                                                data:default-text="Revenue" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="3"
                                                            seriesname="Customers" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="3"
                                                                data:collapsed="false"
                                                                style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="3" i="2"
                                                                data:default-text="Customers" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom,
                                                    .apexcharts-legend.apx-legend-position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                    .apexcharts-legend.apx-legend-position-right,
                                                    .apexcharts-legend.apx-legend-position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                    .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                    .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *,
                                                    .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        margin-right: 3px;
                                                        border-style: solid;
                                                    }

                                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                    .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                        display: inline-block;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series,
                                                    .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG2208" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(45.359375, 30)">
                                                    <defs id="SvgjsDefs2207">
                                                        <clipPath id="gridRectMask5k0cvtoi">
                                                            <rect id="SvgjsRect2218" width="622.640625" height="272.2"
                                                                x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask5k0cvtoi"></clipPath>
                                                        <clipPath id="nonForecastMask5k0cvtoi"></clipPath>
                                                        <clipPath id="gridRectMarkerMask5k0cvtoi">
                                                            <rect id="SvgjsRect2219" width="664.640625" height="318.2"
                                                                x="-24" y="-24" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2237" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop2238" stop-opacity="0.3"
                                                                stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop2239" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop2240" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2259" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop2260" stop-opacity="0.3"
                                                                stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop2261" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop2262" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2281" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop2282" stop-opacity="0.3"
                                                                stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop2283" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop2284" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine2214" x1="0" y1="0" x2="0" y2="270.2"
                                                        stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG2287" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2288" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText2290"
                                                                font-family="Helvetica, Arial, sans-serif" x="0"
                                                                y="299.2" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2291">00:00</tspan>
                                                                <title>00:00</title>
                                                            </text><text id="SvgjsText2293"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="94.86778846153847" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2294">01:00</tspan>
                                                                <title>01:00</title>
                                                            </text><text id="SvgjsText2296"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="189.73557692307693" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2297">02:00</tspan>
                                                                <title>02:00</title>
                                                            </text><text id="SvgjsText2299"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="284.6033653846154" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2300">03:00</tspan>
                                                                <title>03:00</title>
                                                            </text><text id="SvgjsText2302"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="379.47115384615387" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2303">04:00</tspan>
                                                                <title>04:00</title>
                                                            </text><text id="SvgjsText2305"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="474.3389423076923" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2306">05:00</tspan>
                                                                <title>05:00</title>
                                                            </text><text id="SvgjsText2308"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="569.2067307692308" y="299.2" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2309">06:00</tspan>
                                                                <title>06:00</title>
                                                            </text></g>
                                                        <line id="SvgjsLine2310" x1="0" y1="271.2" x2="616.640625"
                                                            y2="271.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-width="1" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2331" class="apexcharts-grid">
                                                        <g id="SvgjsG2332" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine2341" x1="0" y1="0" x2="616.640625"
                                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2342" x1="0" y1="54.04" x2="616.640625"
                                                                y2="54.04" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2343" x1="0" y1="108.08" x2="616.640625"
                                                                y2="108.08" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2344" x1="0" y1="162.12" x2="616.640625"
                                                                y2="162.12" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2345" x1="0" y1="216.16" x2="616.640625"
                                                                y2="216.16" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2346" x1="0" y1="270.2" x2="616.640625"
                                                                y2="270.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG2333" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine2334" x1="0" y1="271.2" x2="0" y2="277.2"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2335" x1="94.86778846153847" y1="271.2"
                                                            x2="94.86778846153847" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2336" x1="189.73557692307693" y1="271.2"
                                                            x2="189.73557692307693" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2337" x1="284.6033653846154" y1="271.2"
                                                            x2="284.6033653846154" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2338" x1="379.47115384615387" y1="271.2"
                                                            x2="379.47115384615387" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2339" x1="474.3389423076923" y1="271.2"
                                                            x2="474.3389423076923" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2340" x1="569.2067307692308" y1="271.2"
                                                            x2="569.2067307692308" y2="277.2" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2348" x1="0" y1="270.2" x2="616.640625"
                                                            y2="270.2" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2347" x1="0" y1="1" x2="0" y2="270.2"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2220"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG2221" class="apexcharts-series" seriesName="Sales"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath2241"
                                                                d="M 0 270.2L 0 186.438C 49.805588942307686 186.438 92.49609375 162.12 142.30168269230768 162.12C 175.50540865384613 162.12 203.96574519230768 194.54399999999998 237.16947115384616 194.54399999999998C 270.3731971153846 194.54399999999998 298.83353365384613 132.398 332.0372596153846 132.398C 365.24098557692304 132.398 393.70132211538464 156.716 426.9050480769231 156.716C 460.10877403846155 156.716 488.5691105769231 48.635999999999996 521.7728365384615 48.635999999999996C 554.9765625 48.635999999999996 583.4368990384615 118.88799999999998 616.640625 118.88799999999998C 616.640625 118.88799999999998 616.640625 118.88799999999998 616.640625 270.2M 616.640625 118.88799999999998z"
                                                                fill="url(#SvgjsLinearGradient2237)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 270.2L 0 186.438C 49.805588942307686 186.438 92.49609375 162.12 142.30168269230768 162.12C 175.50540865384613 162.12 203.96574519230768 194.54399999999998 237.16947115384616 194.54399999999998C 270.3731971153846 194.54399999999998 298.83353365384613 132.398 332.0372596153846 132.398C 365.24098557692304 132.398 393.70132211538464 156.716 426.9050480769231 156.716C 460.10877403846155 156.716 488.5691105769231 48.635999999999996 521.7728365384615 48.635999999999996C 554.9765625 48.635999999999996 583.4368990384615 118.88799999999998 616.640625 118.88799999999998C 616.640625 118.88799999999998 616.640625 118.88799999999998 616.640625 270.2M 616.640625 118.88799999999998z"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath2242"
                                                                d="M 0 186.438C 49.805588942307686 186.438 92.49609375 162.12 142.30168269230768 162.12C 175.50540865384613 162.12 203.96574519230768 194.54399999999998 237.16947115384616 194.54399999999998C 270.3731971153846 194.54399999999998 298.83353365384613 132.398 332.0372596153846 132.398C 365.24098557692304 132.398 393.70132211538464 156.716 426.9050480769231 156.716C 460.10877403846155 156.716 488.5691105769231 48.635999999999996 521.7728365384615 48.635999999999996C 554.9765625 48.635999999999996 583.4368990384615 118.88799999999998 616.640625 118.88799999999998"
                                                                fill="none" fill-opacity="1" stroke="#4154f1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 186.438C 49.805588942307686 186.438 92.49609375 162.12 142.30168269230768 162.12C 175.50540865384613 162.12 203.96574519230768 194.54399999999998 237.16947115384616 194.54399999999998C 270.3731971153846 194.54399999999998 298.83353365384613 132.398 332.0372596153846 132.398C 365.24098557692304 132.398 393.70132211538464 156.716 426.9050480769231 156.716C 460.10877403846155 156.716 488.5691105769231 48.635999999999996 521.7728365384615 48.635999999999996C 554.9765625 48.635999999999996 583.4368990384615 118.88799999999998 616.640625 118.88799999999998"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <g id="SvgjsG2222" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG2224" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2225" r="4" cx="0"
                                                                        cy="186.438"
                                                                        class="apexcharts-marker no-pointer-events worayig7ki"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="0" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle2226" r="4"
                                                                        cx="142.30168269230768" cy="162.12"
                                                                        class="apexcharts-marker no-pointer-events w8xmev4pu"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2227" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2228" r="4"
                                                                        cx="237.16947115384616" cy="194.54399999999998"
                                                                        class="apexcharts-marker no-pointer-events wcgu1ca8g"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2229" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2230" r="4"
                                                                        cx="332.0372596153846" cy="132.398"
                                                                        class="apexcharts-marker no-pointer-events w3fxaodog"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2231" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2232" r="4"
                                                                        cx="426.9050480769231" cy="156.716"
                                                                        class="apexcharts-marker no-pointer-events wbaorod2l"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2233" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2234" r="4"
                                                                        cx="521.7728365384615" cy="48.635999999999996"
                                                                        class="apexcharts-marker no-pointer-events wd6mvvtii"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2235" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2236" r="4" cx="616.640625"
                                                                        cy="118.88799999999998"
                                                                        class="apexcharts-marker no-pointer-events wm4nnse99"
                                                                        stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="0" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2243" class="apexcharts-series"
                                                            seriesName="Revenue" data:longestSeries="true" rel="2"
                                                            data:realIndex="1">
                                                            <path id="SvgjsPath2263"
                                                                d="M 0 270.2L 0 240.47799999999998C 49.805588942307686 240.47799999999998 92.49609375 183.736 142.30168269230768 183.736C 175.50540865384613 183.736 203.96574519230768 148.60999999999999 237.16947115384616 148.60999999999999C 270.3731971153846 148.60999999999999 298.83353365384613 183.736 332.0372596153846 183.736C 365.24098557692304 183.736 393.70132211538464 178.332 426.9050480769231 178.332C 460.10877403846155 178.332 488.5691105769231 129.696 521.7728365384615 129.696C 554.9765625 129.696 583.4368990384615 159.418 616.640625 159.418C 616.640625 159.418 616.640625 159.418 616.640625 270.2M 616.640625 159.418z"
                                                                fill="url(#SvgjsLinearGradient2259)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 270.2L 0 240.47799999999998C 49.805588942307686 240.47799999999998 92.49609375 183.736 142.30168269230768 183.736C 175.50540865384613 183.736 203.96574519230768 148.60999999999999 237.16947115384616 148.60999999999999C 270.3731971153846 148.60999999999999 298.83353365384613 183.736 332.0372596153846 183.736C 365.24098557692304 183.736 393.70132211538464 178.332 426.9050480769231 178.332C 460.10877403846155 178.332 488.5691105769231 129.696 521.7728365384615 129.696C 554.9765625 129.696 583.4368990384615 159.418 616.640625 159.418C 616.640625 159.418 616.640625 159.418 616.640625 270.2M 616.640625 159.418z"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath2264"
                                                                d="M 0 240.47799999999998C 49.805588942307686 240.47799999999998 92.49609375 183.736 142.30168269230768 183.736C 175.50540865384613 183.736 203.96574519230768 148.60999999999999 237.16947115384616 148.60999999999999C 270.3731971153846 148.60999999999999 298.83353365384613 183.736 332.0372596153846 183.736C 365.24098557692304 183.736 393.70132211538464 178.332 426.9050480769231 178.332C 460.10877403846155 178.332 488.5691105769231 129.696 521.7728365384615 129.696C 554.9765625 129.696 583.4368990384615 159.418 616.640625 159.418"
                                                                fill="none" fill-opacity="1" stroke="#2eca6a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 240.47799999999998C 49.805588942307686 240.47799999999998 92.49609375 183.736 142.30168269230768 183.736C 175.50540865384613 183.736 203.96574519230768 148.60999999999999 237.16947115384616 148.60999999999999C 270.3731971153846 148.60999999999999 298.83353365384613 183.736 332.0372596153846 183.736C 365.24098557692304 183.736 393.70132211538464 178.332 426.9050480769231 178.332C 460.10877403846155 178.332 488.5691105769231 129.696 521.7728365384615 129.696C 554.9765625 129.696 583.4368990384615 159.418 616.640625 159.418"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <g id="SvgjsG2244" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG2246" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2247" r="4" cx="0"
                                                                        cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events woibjp1b6"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="1" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle2248" r="4"
                                                                        cx="142.30168269230768" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events w50ru2lt7j"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2249" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2250" r="4"
                                                                        cx="237.16947115384616" cy="148.60999999999999"
                                                                        class="apexcharts-marker no-pointer-events wzkqkl3dm"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2251" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2252" r="4"
                                                                        cx="332.0372596153846" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events wd9hm1w0b"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2253" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2254" r="4"
                                                                        cx="426.9050480769231" cy="178.332"
                                                                        class="apexcharts-marker no-pointer-events w1mumlzrol"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2255" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2256" r="4"
                                                                        cx="521.7728365384615" cy="129.696"
                                                                        class="apexcharts-marker no-pointer-events wapz2ssnug"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2257" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2258" r="4" cx="616.640625"
                                                                        cy="159.418"
                                                                        class="apexcharts-marker no-pointer-events wxl6ldwoth"
                                                                        stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="1" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2265" class="apexcharts-series"
                                                            seriesName="Customers" data:longestSeries="true" rel="3"
                                                            data:realIndex="2">
                                                            <path id="SvgjsPath2285"
                                                                d="M 0 270.2L 0 229.67C 49.805588942307686 229.67 92.49609375 240.47799999999998 142.30168269230768 240.47799999999998C 175.50540865384613 240.47799999999998 203.96574519230768 183.736 237.16947115384616 183.736C 270.3731971153846 183.736 298.83353365384613 221.564 332.0372596153846 221.564C 365.24098557692304 221.564 393.70132211538464 245.88199999999998 426.9050480769231 245.88199999999998C 460.10877403846155 245.88199999999998 488.5691105769231 205.35199999999998 521.7728365384615 205.35199999999998C 554.9765625 205.35199999999998 583.4368990384615 240.47799999999998 616.640625 240.47799999999998C 616.640625 240.47799999999998 616.640625 240.47799999999998 616.640625 270.2M 616.640625 240.47799999999998z"
                                                                fill="url(#SvgjsLinearGradient2281)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="2"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 270.2L 0 229.67C 49.805588942307686 229.67 92.49609375 240.47799999999998 142.30168269230768 240.47799999999998C 175.50540865384613 240.47799999999998 203.96574519230768 183.736 237.16947115384616 183.736C 270.3731971153846 183.736 298.83353365384613 221.564 332.0372596153846 221.564C 365.24098557692304 221.564 393.70132211538464 245.88199999999998 426.9050480769231 245.88199999999998C 460.10877403846155 245.88199999999998 488.5691105769231 205.35199999999998 521.7728365384615 205.35199999999998C 554.9765625 205.35199999999998 583.4368990384615 240.47799999999998 616.640625 240.47799999999998C 616.640625 240.47799999999998 616.640625 240.47799999999998 616.640625 270.2M 616.640625 240.47799999999998z"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <path id="SvgjsPath2286"
                                                                d="M 0 229.67C 49.805588942307686 229.67 92.49609375 240.47799999999998 142.30168269230768 240.47799999999998C 175.50540865384613 240.47799999999998 203.96574519230768 183.736 237.16947115384616 183.736C 270.3731971153846 183.736 298.83353365384613 221.564 332.0372596153846 221.564C 365.24098557692304 221.564 393.70132211538464 245.88199999999998 426.9050480769231 245.88199999999998C 460.10877403846155 245.88199999999998 488.5691105769231 205.35199999999998 521.7728365384615 205.35199999999998C 554.9765625 205.35199999999998 583.4368990384615 240.47799999999998 616.640625 240.47799999999998"
                                                                fill="none" fill-opacity="1" stroke="#ff771d"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="2"
                                                                clip-path="url(#gridRectMask5k0cvtoi)"
                                                                pathTo="M 0 229.67C 49.805588942307686 229.67 92.49609375 240.47799999999998 142.30168269230768 240.47799999999998C 175.50540865384613 240.47799999999998 203.96574519230768 183.736 237.16947115384616 183.736C 270.3731971153846 183.736 298.83353365384613 221.564 332.0372596153846 221.564C 365.24098557692304 221.564 393.70132211538464 245.88199999999998 426.9050480769231 245.88199999999998C 460.10877403846155 245.88199999999998 488.5691105769231 205.35199999999998 521.7728365384615 205.35199999999998C 554.9765625 205.35199999999998 583.4368990384615 240.47799999999998 616.640625 240.47799999999998"
                                                                pathFrom="M -1 270.2L -1 270.2L 142.30168269230768 270.2L 237.16947115384616 270.2L 332.0372596153846 270.2L 426.9050480769231 270.2L 521.7728365384615 270.2L 616.640625 270.2">
                                                            </path>
                                                            <g id="SvgjsG2266" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="2">
                                                                <g id="SvgjsG2268" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2269" r="4" cx="0"
                                                                        cy="229.67"
                                                                        class="apexcharts-marker no-pointer-events wm13ggjid"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                        j="0" index="2" default-marker-size="4">
                                                                    </circle>
                                                                    <circle id="SvgjsCircle2270" r="4"
                                                                        cx="142.30168269230768" cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events wruzgpp1b"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                        j="1" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2271" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2272" r="4"
                                                                        cx="237.16947115384616" cy="183.736"
                                                                        class="apexcharts-marker no-pointer-events wcbjm89kz"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                        j="2" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2273" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2274" r="4"
                                                                        cx="332.0372596153846" cy="221.564"
                                                                        class="apexcharts-marker no-pointer-events w1oq9dw9b"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                        j="3" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2275" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2276" r="4"
                                                                        cx="426.9050480769231" cy="245.88199999999998"
                                                                        class="apexcharts-marker no-pointer-events wzg1dyb0h"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                        j="4" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2277" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2278" r="4"
                                                                        cx="521.7728365384615" cy="205.35199999999998"
                                                                        class="apexcharts-marker no-pointer-events wrs6mas8i"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                        j="5" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                                <g id="SvgjsG2279" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMask5k0cvtoi)">
                                                                    <circle id="SvgjsCircle2280" r="4" cx="616.640625"
                                                                        cy="240.47799999999998"
                                                                        class="apexcharts-marker no-pointer-events w9d1hq4uwh"
                                                                        stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                        j="6" index="2" default-marker-size="4">
                                                                    </circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2223" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG2245" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                        <g id="SvgjsG2267" class="apexcharts-datalabels"
                                                            data:realIndex="2"></g>
                                                    </g>
                                                    <line id="SvgjsLine2349" x1="0" y1="0" x2="616.640625" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2350" x1="0" y1="0" x2="616.640625" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2351" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2352" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2353" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect2354" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect2355" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect2213" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG2311" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(15.359375, 0)">
                                                    <g id="SvgjsG2312" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText2314"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2315">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText2317"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="85.53999999999999" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2318">80</tspan>
                                                            <title>80</title>
                                                        </text><text id="SvgjsText2320"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="139.57999999999998" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2321">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText2323"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="193.61999999999998" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2324">40</tspan>
                                                            <title>40</title>
                                                        </text><text id="SvgjsText2326"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="247.65999999999997" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2327">20</tspan>
                                                            <title>20</title>
                                                        </text><text id="SvgjsText2329"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="301.7"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2330">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG2209" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(65, 84, 241);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(46, 202, 106);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 119, 29);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Sales',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'Revenue',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Customers',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: ["2018-09-19T00:00:00.000Z",
                                                    "2018-09-19T01:30:00.000Z",
                                                    "2018-09-19T02:30:00.000Z",
                                                    "2018-09-19T03:30:00.000Z",
                                                    "2018-09-19T04:30:00.000Z",
                                                    "2018-09-19T05:30:00.000Z",
                                                    "2018-09-19T06:30:00.000Z"
                                                ]
       
                                     },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                                    <div
                                        class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                        <div class="dataTable-top">
                                            <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                                        <option value="5">5</option>
                                                        <option value="10" selected="">10</option>
                                                        <option value="15">15</option>
                                                        <option value="20">20</option>
                                                        <option value="25">25</option>
                                                    </select> entries per page</label></div>
                                            <div class="dataTable-search"><input class="dataTable-input"
                                                    placeholder="Search..." type="text"></div>
                                        </div>
                                        <div class="dataTable-container">
                                            <table class="table table-borderless datatable dataTable-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-sortable="" style="width: 10.9481%;"><a
                                                                href="#" class="dataTable-sorter">#</a></th>
                                                        <th scope="col" data-sortable="" style="width: 23.9278%;"><a
                                                                href="#" class="dataTable-sorter">Customer</a></th>
                                                        <th scope="col" data-sortable="" style="width: 40.1806%;"><a
                                                                href="#" class="dataTable-sorter">Product</a></th>
                                                        <th scope="col" data-sortable="" style="width: 9.81941%;"><a
                                                                href="#" class="dataTable-sorter">Price</a></th>
                                                        <th scope="col" data-sortable="" style="width: 15.1242%;"><a
                                                                href="#" class="dataTable-sorter">Status</a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><a href="#">#2457</a></th>
                                                        <td>Brandon Jacob</td>
                                                        <td><a href="#" class="text-primary">At praesentium minu</a>
                                                        </td>
                                                        <td>$64</td>
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#">#2147</a></th>
                                                        <td>Bridie Kessler</td>
                                                        <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                                similique</a></td>
                                                        <td>$47</td>
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#">#2049</a></th>
                                                        <td>Ashleigh Langosh</td>
                                                        <td><a href="#" class="text-primary">At recusandae
                                                                consectetur</a></td>
                                                        <td>$147</td>
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#">#2644</a></th>
                                                        <td>Angus Grady</td>
                                                        <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                                et</a></td>
                                                        <td>$67</td>
                                                        <td><span class="badge bg-danger">Rejected</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#">#2644</a></th>
                                                        <td>Raheem Lehner</td>
                                                        <td><a href="#" class="text-primary">Sunt similique
                                                                distinctio</a></td>
                                                        <td>$165</td>
                                                        <td><span class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="dataTable-bottom">
                                            <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                                            <nav class="dataTable-pagination">
                                                <ul class="dataTable-pagination-list"></ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">
                                <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                        nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                        doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                        exercitationem</a></td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum
                                                        error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                            alt=""></a></th>
                                                <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                        repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>
                            <div class="activity">
                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div> <i
                                        class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                    <div class="activity-content"> Quia quae rerum <a href="#"
                                            class="fw-bold text-dark">explicabo officiis</a> beatae</div>
                                </div>
                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div> <i
                                        class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                    <div class="activity-content"> Voluptatem blanditiis blanditiis eveniet</div>
                                </div>
                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div> <i
                                        class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                    <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                                </div>
                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div> <i
                                        class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                    <div class="activity-content"> Tempore autem saepe <a href="#"
                                            class="fw-bold text-dark">occaecati voluptatem</a> tempore</div>
                                </div>
                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div> <i
                                        class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                    <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                                </div>
                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div> <i
                                        class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                    <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit
                                        quas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Budget Report <span>| This Month</span></h5>
                            <div id="budgetChart"
                                style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"
                                class="echart" _echarts_instance_="ec_1667231287657">
                                <div
                                    style="position: relative; width: 304px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                    <canvas data-zr-dom-id="zr_0" width="304" height="400"
                                        style="position: absolute; left: 0px; top: 0px; width: 304px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var budgetChart = echarts.init(document.querySelector("#budgetChart"))
                                    .setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Sales',
                                                    max: 6500
                                                },
                                                {
                                                    name: 'Administration',
                                                    max: 16000
                                                },
                                                {
                                                    name: 'Information Technology',
                                                    max: 30000
                                                },
                                                {
                                                    name: 'Customer Support',
                                                    max: 38000
                                                },
                                                {
                                                    name: 'Development',
                                                    max: 52000
                                                },
                                                {
                                                    name: 'Marketing',
                                                    max: 25000
                                                }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                    value: [4200, 3000, 20000, 35000, 50000,
                                                        18000
                                                    ],
                                                    name: 'Allocated Budget'
                                                },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000,
                                                        21000
                                                    ],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                            });
                            </script>
                        </div>
                    </div>
                    <div class="card">
                        <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="card-title">Website Traffic <span>| Today</span></h5>
                            <div id="trafficChart"
                                style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                class="echart" _echarts_instance_="ec_1667231287658">
                                <div
                                    style="position: relative; width: 304px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                    <canvas data-zr-dom-id="zr_0" width="304" height="400"
                                        style="position: absolute; left: 0px; top: 0px; width: 304px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                                <div class=""></div>
                            </div>
                            <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 1048,
                                                name: 'Search Engine'
                                            },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                            </script>
                        </div>
                    </div>
                    <div class="card">
                        <div class="filter"> <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
                            <div class="news">
                                <div class="post-item clearfix"> <img src="assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>
                                <div class="post-item clearfix"> <img src="assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...
                                    </p>
                                </div>
                                <div class="post-item clearfix"> <img src="assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...
                                    </p>
                                </div>
                                <div class="post-item clearfix"> <img src="assets/img/news-4.jpg" alt="">
                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...
                                    </p>
                                </div>
                                <div class="post-item clearfix"> <img src="assets/img/news-5.jpg" alt="">
                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos
                                        eius...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer">
        <div class="copyright"> © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved</div>
        <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div>
    </footer> <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script>
    <script>
    if (window.self == window.top) {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-P7JSYB1CSP');
    }
    </script> <svg id="SvgjsSvg1151" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1152"></defs>
        <polyline id="SvgjsPolyline1153" points="0,0"></polyline>
        <path id="SvgjsPath1154"
            d="M-1 270.2L-1 270.2C-1 270.2 128.2247596153846 270.2 128.2247596153846 270.2C128.2247596153846 270.2 213.7079326923077 270.2 213.7079326923077 270.2C213.7079326923077 270.2 299.1911057692308 270.2 299.1911057692308 270.2C299.1911057692308 270.2 384.67427884615387 270.2 384.67427884615387 270.2C384.67427884615387 270.2 470.15745192307696 270.2 470.15745192307696 270.2C470.15745192307696 270.2 555.640625 270.2 555.640625 270.2C555.640625 270.2 555.640625 270.2 555.640625 270.2 ">
        </path>
    </svg>
</body>

</html>