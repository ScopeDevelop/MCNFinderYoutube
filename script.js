$(document).ready(function (){

$('#channelsubmit').click( function() {
  loadChannel($('#channelinput').val());
});

  var chanName = "";

  loadChannel("UC3PfPt2k-nvEDb-aguQWTWQ");
  function loadChannel(name) {

    chanName = name;

    var url = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id="+name+"&key=AIzaSyAmx8AUaGcSj-MCt96i0lcHqPUiW6cD5gY";
    $.getJSON(url, function(data) {
      $('#subcount').html('<p><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Subscribers: </p>' + data.items[0].statistics.subscriberCount);
      $('#viewcount').html('<p><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Viewers: </p>' + data.items[0].statistics.viewCount );
    });


    var url1 = "https://www.googleapis.com/youtube/v3/channels?part=snippet&id="+name+"&key=AIzaSyAmx8AUaGcSj-MCt96i0lcHqPUiW6cD5gY";
    $.getJSON(url1, function(data) {
      $('#channelimage').html('<img src=\"'+data.items[0].snippet.thumbnails.default.url+'\">');
      $('#channelname').html('<a href="\https://www.youtube.com/channel/' + data.items[0].id + '\">Channel Link</a>');
    });
  }
});
