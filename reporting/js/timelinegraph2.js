$(document).ready(function(){
	$.ajax({
		url : "http://cs641.com/chartjs1/timedata2.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var userid = [];
			var facebook_follower = [];
			

			for(var i in data) {
				userid.push("March" + data[i].day);
				facebook_follower.push(data[i].mar);
				
			}

			var chartdata = {
				labels: userid,
				datasets: [
					{
						label: "time in minutes",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: facebook_follower
					},
					
				]
			};

			var ctx = $("#mycanvas");

			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});