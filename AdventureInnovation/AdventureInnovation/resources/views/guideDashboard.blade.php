@extends('layoutGuide')

@section('headGuide')
    <style>
     #Dashboard_div {
            color: black;
            padding: 0%;
            padding-left: 15%;
            padding-right: 15%
        }   
       
    </style>
	<script>
    setCal()

    function getTime() {
        var now = new Date()
        var hour = now.getHours()
        var minute = now.getMinutes()
        now = null
        var ampm = ""	
    
        if (hour >= 12) {
            hour -= 12
            ampm = "PM"
        } else
            ampm = "AM"
            hour = (hour == 0) ? 12 : hour

        if (minute < 10)
        minute = "0" + minute 

    
        return hour + ":" + minute + " " + ampm
     }

    function leapYear(year) {
       if (year % 4 == 0) 
        return true 
        return false 
    }

    function getDays(month, year) {
  
       var ar = new Array(12)
       ar[0] = 31 // January
       ar[1] = (leapYear(year)) ? 29 : 28 // February
       ar[2] = 31 // March
       ar[3] = 30 // April
       ar[4] = 31 // May
       ar[5] = 30 // June
       ar[6] = 31 // July
       ar[7] = 31 // August
       ar[8] = 30 // September
       ar[9] = 31 // October
       ar[10] = 30 // November
       ar[11] = 31 // December

     return ar[month]
    }

    function getMonthName(month) {
       var ar = new Array(12)
       ar[0] = "January"
       ar[1] = "February"
       ar[2] = "March"
       ar[3] = "April"
       ar[4] = "May"
       ar[5] = "June"
       ar[6] = "July"
       ar[7] = "August"
       ar[8] = "September"
       ar[9] = "October"
       ar[10] = "November"
       ar[11] = "December"

    return ar[month]
    }

    function setCal() {
        var now = new Date()
        var year = now.getYear()
        if (year < 1000)
           year += 1900
        var month = now.getMonth()
        var date = now.getDate()
        now = null

        var firstDayInstance = new Date(year, month, 1)
        var firstDay = firstDayInstance.getDay()
        firstDayInstance = null

        var days = getDays(month, year)

        drawCal(firstDay + 1, days, date, month, year)
    }
	
	function setPreviousMonth(date, month, year){
		
		if (month == 0) {
			month = 11;
			if (year > 1000) { year--;}
		} else { month--; }
		
		var firstDayInstance = new Date(year, month, 1)
        var firstDay = firstDayInstance.getDay()
        firstDayInstance = null

        var days = getDays(month, year)

        drawCal(firstDay + 1, days, date, month, year)
	}
	
	
	function setNextMonth(date, month, year){
		
		if (month == 11) {
			month = 0;
			if (year > 1000) { year++;}
		} else { month++; }
		
		var firstDayInstance = new Date(year, month, 1)
        var firstDay = firstDayInstance.getDay()
        firstDayInstance = null

        var days = getDays(month, year)

        drawCal(firstDay + 1, days, date, month, year)
	}
	

    function drawCal(firstDay, lastDate, date, month, year) {
		
	   var monthName = getMonthName(month)
       var headerHeight = 50 
       var border = 2 
       var cellspacing = 4 
       var headerColor = "midnightblue" 
       var headerSize = "+3" 
       var colWidth = 60 
       var dayCellHeight = 25 
       var dayColor = "darkblue" 
       var cellHeight = 40 
       var todayColor = "red" 
       var timeColor = "purple" 
	   var leftArrow = "<"



       var text = "" 
       text += '<CENTER>'
       text += '<TABLE BORDER=' + border + ' CELLSPACING=' + cellspacing + '>' 
       text += '<TH COLSPAN=7 HEIGHT=' + headerHeight + '>' 
       text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>' 
	   text += '<CENTER>' + '<input type=button class="btn_nav" name="previousYear" value="  <  "  style="float: left;" onClick="setPreviousMonth(' + 
	   date + ', ' + month + ', ' + year + ')">'
	   text += monthName + ' ' + year 
	   text += '<input type=button class="btn_nav" name="nextYear" value="  >  "  style="float: right;" onClick="setNextMonth(' + 
	   date + ', ' + month + ', ' + year + ')">' + '</CENTER>'	   	 
       text += '</FONT>' 
       text += '</TH>' 

        var openCol = '<TD WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>'
        openCol += '<FONT COLOR="' + dayColor + '">'
        var closeCol = '</FONT></TD>'

        var weekDay = new Array(7)
        weekDay[0] = "Sun"
        weekDay[1] = "Mon"
        weekDay[2] = "Tues"
        weekDay[3] = "Wed"
        weekDay[4] = "Thu"
        weekDay[5] = "Fri"
        weekDay[6] = "Sat"

 
        text += '<TR ALIGN="center" VALIGN="center">'
        for (var dayNum = 0; dayNum < 7; ++dayNum) {
        text += openCol + weekDay[dayNum] + closeCol
        }
        text += '</TR>'

   
        var digit = 1
        var curCell = 1

        for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {
           text += '<TR ALIGN="right" VALIGN="top">'
           for (var col = 1; col <= 7; ++col) {
            if (digit > lastDate)
                break
            if (curCell < firstDay) {
               text += '<TD></TD>';
               curCell++
               } else {
            if (digit == date) { 
               text += '<TD HEIGHT=' + cellHeight + '>'
               text += '<FONT COLOR="' + todayColor + '">'
               text += digit
               text += '</FONT><BR>'
               text += '<FONT COLOR="' + timeColor + '" SIZE=2>'
               text += '<CENTER>' + getTime() + '</CENTER>'
               text += '</FONT>'
               text += '</TD>'
            } else
            text += '<TD HEIGHT=' + cellHeight + '>' + digit + '</TD>'
            digit++
            }
        }
         text += '</TR>'
    }

  
    text += '</TABLE>'
    text += '</CENTER>'

    document.getElementById("calendar").innerHTML = text  
}

    
	
    </script>
@stop

@section('bodyGuide')


<body onload="setCal()"> 

<div id="Dashboard_div" class="container-fluid">
    <div  class="container-fluid">
        <h1 class="text-center" style="margin-bottom:3%;"> Welcome to your Guide Dashboard</h1>
	</div>
	
   			
    <div  class="row" style = "margin-bottom:2%">
         <div style = "background-color:seaShell;align:center" class="col-md-1" >
		
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar" aria-hidden="true"> </i> </button>
		     
		     <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog"> 
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">New Event</h4>
                        </div>
                        <div class="modal-body">
                            <label for="emailInput">Title</label>
		                     <input type="email" class="form-control" style="margin-bottom:5%">
							 
                             <label for="emailInput">Location</label>
		                     <input type="email" class="form-control" style="margin-bottom:5%">
							 
                             <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="All-day">
                             <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="Starts">
                             <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="Ends">	
                             <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="URL">	
							  <input type="email" class="form-control" style="margin-bottom:5%"id="emailInput" placeholder="Notes">	
                        </div>
                        <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">add </button>
                        </div>
                    </div>
      
                </div>
             </div>
		    <div>
		        <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span> Search
                </button>
			</div>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br></br></br></br></br>
        </div>	
		
	   	 <div id = "calendar" class="col-md-4" style = "background-color:seaShell" >	    
		    
        </div>
		<div id = "calendar" class="col-md-1"  >	    
		    
        </div>
        
	    <div class="col-md-6" >					
			<div style = "background-color: seaShell" class="row">	
                <h4 style="margin-bottom:2%;align:left;"> Favourited Jobs</h4>			
				<div class="col-md-2">
                   <img src="kayaking.jpg" class="img-rounded" alt="kayaking" width="112" height="78">
				</div>
				
				<div class="col-md-10">				    
				    <div class="row">				
			            <div class="col-md-7">
		                    <h5>Adventure Company</h5>
							<h5>Enthusiastic Lead</h5>
							<h5>Montreal, QC</h5>
				        </div>
						
				         <div class="form-group col-md-5">
						    <a href="Jobs.html" class="btn btn-danger" role="button">Apply</a>
		                    <p style="margin-top:5%">Expires in 14 days</p>
				         </div>
						 
					</div>
				
				</div>
			</div>
			
			<div  style = "background-color: seaShell" class="row">				
				<div class="col-md-2">
                   <img src="kayaking.jpg" class="img-rounded" alt="kayaking" width="112" height="78">
				</div>
				
				<div class="col-md-10">
				    
				    <div class="row">				
			            <div class="col-md-7">
		                    <h5>Adventure Company</h5>
							<p>Enthusiastic Lead<p>
							<p>Montreal, QC</p>
				        </div>
						
				         <div class="form-group col-md-5">
						    <a href="Jobs.html" class="btn btn-danger" role="button">Apply</a>
		                    <p style="margin-top:5%">Expires in 14 days</p>
				         </div>
						 
					</div>
				
				</div>
			</div>
			
			<div style = "text-align: center;background-color: seaShell; margin-bottom:4%">
			    <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
			</div>
			
			
			<div class="row" style="margin-bottom:1%;">				
				<div style="background-color:wheat" class="col-md-2">
                 <span>9:00AM</span></br>
				 <span>12:00PM</span>                 				 
				</div>
				
				<div class="col-md-3">
				    <h5>Bear Lake Loop </h5>				    							            										       						 
				</div>
				
				<div class="col-md-3">
				    <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#Modal">Trip Details</button>	
                    <div id="Modal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                     <p></p>
                                </div>
                                <div class="modal-footer">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                            </div>

                         </div>
                    </div>					
				</div>
				
				<div class="col-md-4">
				    <h5> March 3-10, 2017</h5>				    							            										       						 
				</div>
				
			</div>
			
			<div class="row" style="margin-bottom:1%">				
				<div style="background-color:wheat" class="col-md-2">
                  <span>9:00AM</span></br>
				 <span>12:00PM</span>    
				</div>
				
				<div class="col-md-6">
				    <h5>CPR Training</h5>				    							            										       						 
				</div>
				
				<div class="col-md-4">
				    <h5> March 12, 2017</h5>				    							            										       						 
				</div>
				
			</div>
			
			<div class="row" style="margin-top:1%">				
				<div style="background-color:wheat" class="col-md-2">
                <span>9:00AM</span></br>
				<span>12:00PM</span>    
				</div>
				
				<div class="col-md-6">
				    <h5>Mount Evie Exp.</h5>				    							            										       						 
				</div>
				
				<div class="col-md-4">
				    <h5> March 21-25, 2017</h5>				    							            										       						 
				</div>
				
			</div>
		</div>
				
	</div>	
         
    <div class="row" >	
	    <div class="col-md-5" >			    		    			
		    <h4 style="margin-bottom:2%; align:left;"> RECENT LOGBOOK ENTRIES</h4>					
		    <div style = "background-color:seaShell" class="row">	
				<div class="col-md-8">
                    <h5>Castle Guard Cave</h5>  
				</div>
				
				<div class="col-md-4">
				    <span>Updated 3 hours ago</span></br>
				    <span>March 21, 2017</span>                     		    							            										       						 					
				</div>	
            </div>	
			
            <div style = "background-color: Gainsboro" class="row">	
				<div class="col-md-8">
                    <h5>Spelunking</h5>  
				</div>
				
				<div class="col-md-4">
				<p></p>
				<a href="logbook.html" style="align:bottom;text-decoration: underline"; >Read More</a>    
				    
                    		    							            										       						 					
				</div>	
            </div>				

            <div style = "background-color:seaShell" class="row">	
			    <div class="col-md-8">
                    <h5>Booth Rock Trail</h5>  
			    </div>
				
			    <div class="col-md-4">
				    <span>Updated 3 hours ago</span></br>
				    <span>March 21, 2017</span>     	
                   		    							            										       						 					
			    </div>	
           </div>
		   
		   <div style = "background-color: Gainsboro" class="row">	
				<div class="col-md-8">
                    <h5>Default</h5>  
				</div>
				
				<div class="col-md-4">
				<p></p>
				<a href="logbook.html" style="align:bottom;text-decoration: underline"; >Read More</a>                        		    							            										       						 					
				</div>	
            </div>	
			
            <div style="text-align: center; margin-top: 6%; margin-bottom:10%">
		         <a href="newlogbook.html" class="btn btn-danger" role="button" >Create New Log</a>
		    </div>		   
		</div>
		
		<div class="col-md-2" >
		</div>
					
	    <div class="col-md-5" >			    		    			
		    <h4 style="margin-bottom:2%; align:left;"> RECENT REPORTS</h4>					
		    <div style = "background-color:seaShell" class="row">	
				<div class="col-md-8">
                    <h5>Bear Lake Loop</h5>  
				</div>
				
				<div class="col-md-4">
				    <span>Updated 3 hours ago</span></br>
				    <span>March 21, 2017</span>                     		    							            										       						 					
				</div>	
            </div>	
			
            <div style = "background-color: Gainsboro" class="row">	
				<div class="col-md-8">
                    <h5>Equipment Inspection</h5>  
				</div>
				
				<div class="col-md-4">
				    <p></p>
				    <a href="logbook.html" style="align:bottom;text-decoration: underline"; >Read More</a>                       		    							            										       						 					
				</div>	
            </div>				

            <div style = "background-color:seaShell" class="row">	
			    <div class="col-md-8">
                    <h5>Mount Evie Exp.</h5>  
			    </div>
				
			    <div class="col-md-4">
				    <span>Updated 3 hours ago</span></br>
				    <span>March 21, 2017</span>     	
                   		    							            										       						 					
			    </div>	
           </div>
		   
		   <div style = "background-color: Gainsboro" class="row">	
				<div class="col-md-8">
                    <h5>Near Miss</h5>  
				</div>
				
				<div class="col-md-4">
				<p></p>
				<a href="createLogType" style="align:bottom;text-decoration: underline"; >Read More</a>                        		    							            										       						 					
				</div>	
            </div>	
			
            <div style="text-align: center; margin-top: 6%; margin-bottom:10%">
		         <a href="createDefaultLogbook" class="btn btn-danger" role="button" >Create New Report</a>
		    </div>		   
		</div>
						
    </div>	
	
</div>
</body>
@stop