$(function() {

    $('.video-link').click(function() {
        $('.video-link').removeClass('video-active');
        $(this).addClass('video-active');
        var videoPath = '/storage/';
        var videoLink = videoPath + '' + $(this).attr('data-videosrc');
        var videoName = $(this).attr('data-videoname');
        var videoDescription = $(this).attr('data-videodesc');

        var video = $('.course-box video')[0];
        video.src = videoLink;
        video.load();
        video.play();


        $('.course-box').find('.video-name').text(videoName);
        $('.course-box').find('.video-description').text(videoDescription);
        return false;
    });

    $('.results-tab').click(function() {
        var _target = $(this).attr('data-target');
        $('.results-tab').removeClass('active-tab');
        $(this).addClass('active-tab');

        $('.results-content').removeClass('content-active');
        $(_target).addClass('content-active');
    });


    $('.question-heading').click(function() {
      if($(this).hasClass('active-heading')) {
        $(this).closest('li').find('.question-content').slideUp(250);
        $(this).removeClass('active-heading');
      } else {
        $(this).closest('ul').find('.question-heading').removeClass('active-heading');
        $(this).addClass('active-heading');
        $(this).closest('ul').find('.question-content').hide();
        $(this).closest('li').find('.question-content').slideDown(250);
      }
    });
})

var topofDiv = $(".target-callout").offset().top; //gets offset of header

var _scrolled = 0;
$(window).scroll(function(){
    if($(window).scrollTop() > (topofDiv)) {
      if(_scrolled == 0) {
          $('.counter').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
                countNum: countTo
              },

              {
                duration: 1000,
                easing: 'linear',
                step: function() {
                  $this.text(commaSeparateNumber(Math.floor(this.countNum)));
                },
                complete: function() {
                  $this.text(commaSeparateNumber(this.countNum));
                  //alert('finished');
                }
              }
            );
          });
          _scrolled = 1;
      }
    }
});


function commaSeparateNumber(val) {
  while (/(\d+)(\d{3})/.test(val.toString())) {
    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
  }
  return val;
}
