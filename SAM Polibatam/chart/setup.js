$(document).ready(function(){
  $.ajax({
    url: "https://absen.polibatam.ac.id/admin/chart/getData.php",
    method: "GET",
    success: function(datas) {
      console.log(datas);
      var date = [];
      var total = [];
      var presensi =[];

      for(var i in datas) {
        date.push(datas[i].niceDate);
        total.push(datas[i].total);
        presensi.push(datas[i].presensi);
      }

     const data = {
  	labels: date,
  	datasets: [{
    		label: 'Jumlah Pengguna',
    		backgroundColor: 'rgb(0, 0, 255)',
    		borderColor: 'rgb(0, 0, 255)',
    		data: total,
        },

        {
    		label: 'Jumlah Presensi',
    		backgroundColor: 'rgb(0, 255, 0)',
    		borderColor: 'rgb(0, 255, 0)',
    		data: presensi,
        }]
    };

   const config = {
       type: 'line',
       data,
       options: {}
   };

   var myChart = new Chart(document.getElementById('attChart'), config);

  }
});

});
