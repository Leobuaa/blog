<!DOCTYPE html>
<html>
    <head>
        <title>Layout</title>
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">;
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        	<div class="container-fluid">
        		<div class="navbar-header">
        			<a href="#" class="navbar-brand">协同课程中心</a>
        		</div>
        		<div id="navbar" class="navbar-collapse collapse">
        			<ul class="nav navbar-nav navbar-right">
        				<li>
        					<a href="#">控制台</a>
        				</li>
        				<li>
        					<a href="#">登录</a>
        				</li>
        			</ul>
        		</div> 
        	</div>
        </nav>

        <div class="container-fluid" id="contentDiv">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    @yield('sidebar')
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
