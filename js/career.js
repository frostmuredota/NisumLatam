$(function(){
  $.getJSON("./php/listReader.php", function(data) {
	var careers = data.resultItemList;
	if(careers.length){
	$("#listing-stmt").show();	
	var header = "<div class='row jobheadings'><div class='col-md-5 seperator'><h5>Position</h5></div><div class='col-md-3 seperator'><h5>Location</h5></div><div class='col-md-2 seperator'><h5>Posting date</h5></div><div class='col-md-1'><h5>Details</h5></div></div>";
    for(var i=0;i<careers.length;i++){
		var element = "<div class='recent-job-list'>"
						+"<div class='col-md-5 job-list-desc'>"
							+"<h5>"+careers[i].jobTitle+"</h5>"
						+"</div>"
						+"<div class='col-md-3 job-list-location'>"
							+"<h5><i class='fa fa-map-marker'></i>"+careers[i].location+"</h5>"
						+"</div>"
						+"<div class='col-md-4'>"
							+"<div class='row'>"
							+"<div class='col-md-6 job-list-type'>"
									+"<h5><i class='fa fa-user'></i>"+careers[i].date+"</h5>"
							+"</div>"
							+"<div class='col-md-6 job-list-button'>"
										+"<a  href='"+careers[i].detailUrl+"' target='_blank' class='btn-view-job'>View on Dice</a>"
							+"</div>"
							+"</div>"
						+"</div>"
						+"<div class='clearfix'></div>"
					+"</div>";
		$('#career-openings').append(element);
	}
		$('#career-openings').prepend(header);
    } else {
		
		$("#listing-stmt").hide();
		
		var element = "<div class='no-list list-confir'>We do not have any job openings currently."
							+" For US positions, email your applications to <a href='mailto:hrteam@nisum.com'>hrteam@nisum.com.</a>"
							+" <br> Email Subject Line: Position / Your Name / Years of experience.</div>"
							+"<div class='clearfix'></div>";
		$('#career-openings').append(element);
    }
	});
});