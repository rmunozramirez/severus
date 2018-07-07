<!DOCTYPE html>
<head>
    @include('dashboard.partials.head')

</head>

<body class="">

    <div id="wrapper">

        <!--  left vertical menu -->
        @include ('dashboard.partials.navigation-left')

        <div id="page-wrapper" class="gray-bg dashbard-1">

                @include ('dashboard.partials.navigation-top')

                @include ('dashboard.partials.content')

                @include('dashboard.partials.footer')

        </div> 

    </div>  

    @include('dashboard.partials.scripts')

</body>

</html>
