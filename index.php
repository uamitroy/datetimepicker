<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.input-group-addon {
  cursor: pointer;
}

.input-group.date {
  text-transform: uppercase;
}

.form-control {
  border: 1px solid #ccc;
  box-shadow: none;
  &:hover, &:focus, &:active {
    box-shadow: none;
  }
  &:focus {
    border: 1px solid #34495e;
  }
}

@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
@import url('https://fonts.googleapis.com/css?family=Pacifico');

body {
  background: #e0e0e0;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  line-height: 21px;
  padding: 15px 0;
}

h1 {
  color: #333;
  font-family: 'Pacifico', cursive;
  font-size: 28px;
  line-height: 42px;
  margin: 0 0 15px;
  text-align: center;
}

.content {
  background: #fff;
  border-radius: 3px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075), 0 2px 4px rgba(0, 0, 0, 0.0375);
  padding: 30px 30px 20px;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
  border: 1px solid #34495e;
  border-radius: 0;
  box-shadow: none;
  margin: 10px 0 0 0;
  padding: 0;
  min-width: 300px;
  max-width: 100%;
  width: auto;
  &.bottom:before,
  &.bottom:after {
    display: none;
  }
  table td,
  table th {
    border-radius: 0;
  }
  table td.old, table td.new {
    color: #bbb;
  }
  table td.today:before {
    border-bottom-color: #0095ff;
  }
  table td.active,
  table td.active:hover,
  table td span.active {
    background-color: #0095ff;
    text-shadow: none;
    
    &.today:before {
      border-bottom-color: #fff;
    }
  }
  table th {
    height: 40px;
    padding: 0;
    width: 40px;
    &.picker-switch {
      width: auto;
    }
  }
  table tr:first-of-type th {
    border-bottom: 1px solid #34495e;
  }
  table td.day {
    height: 32px;
    line-height: 32px;
    padding: 0;
    width: auto;
  }
  table td span {
    border-radius: 0;
    height: 77px;
    line-height: 77px;
    margin: 0;
    width: 25%;
  }
  .datepicker-months tbody tr td,
  .datepicker-years tbody tr td,
  .datepicker-decades tbody tr td {
    padding: 0;
  }

  .datepicker-decades tbody tr td {
    height: 27px;
    line-height: 27px;

    span {
      display: block;
      float: left;
      width: 50%;
      height: 46px;
      line-height: 46px !important;
      padding: 0;
      &:not(.decade) {
        display: none;
      }
    }
  }
  .timepicker-picker table td {
    padding: 0;
    width: 30%;
    height: 20px;
    line-height: 20px;
    &:nth-child(2) {
      width: 10%;
    }
    a,
    span,
    button {
      border: none;
      border-radius: 0;
      height: 56px;
      line-height: 56px;
      padding: 0;
      width: 100%;
    }
    span {
      color: #333;
      margin-top: -1px;
    }
    button {
      background-color: #fff;
      color: #333;
      font-weight: bold;
      font-size: 1.2em;
      &:hover {
        background-color: #eee;
      }
    }
  }
}
.bootstrap-datetimepicker-widget.dropdown-menu .picker-switch table td {
  border-top: 1px solid #34495e;
  a, span {
    display: block;
    height: 40px;
    line-height: 40px;
    padding: 0;
    width: 100%;
  }
}
.todayText:before {
  content: "Today's Date"
}
	</style>

	<link rel="stylesheet" type="text/css" href="js/jquery.datetimepicker.min.css">

</head>
<body>

	<div class="control-group form-horizontal ">
       <label class="control-label">Date</label>
              <div class="controls" style="position: relative">
                 <input name="datetime" id="datepicker" type="text"  class="span4" value="" >
                                </div>
                            </div>
  

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src=""></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.min.js"></script>

<script type="text/javascript">
	jQuery('#datepicker').datetimepicker({
  format:'d.m.Y H:i',
  inline:true,
  lang:'ru',
  onChangeDateTime:function(dp,$input){
    alert($input.val())
  }
});
</script>

	<script type="text/javascript">
	
  // if desktop device, use DateTimePicker
/*  $("#datepicker").datetimepicker({
    useCurrent: false,
    inline: true,
    format: "DD-MMM-YYYY",
    showTodayButton: true,
    icons: {
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left",
      today: 'todayText',
    }
  });*/



	</script>

</body>
</html>