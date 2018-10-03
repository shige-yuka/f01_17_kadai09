$(function () {
  $("#harf").change(function () {
    var str = $(this).val();
    str = str.replace(/[Ａ-Ｚａ-ｚ０-９－！”＃＄％＆’（）＝＜＞，．？＿［］｛｝＠＾～￥]/g, function (s) {
      return String.fromCharCode(s.charCodeAt(0) - 65248);
    });
    $(this).val(str);
  }).change();
});

$(".js-valdate-url").blur(function () {
  var str = $(this).val();
  var validateURL = /^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/;
  var validateHTTP = /^(https?|ftp)(:\/\/)/
  var addHTTP = 'http://'
  if (str.match(validateHTTP) == null) {
    $(this).val(addHTTP + String($(this).val()));
  }
  if (str != '') {
    if (str.match(validateURL)) {
      $(this).removeClass('val-error');
      return true;
    } else {
      $(this).addClass('val-error');
      return false;
    }
  } else {
    $(this).addClass('val-error');
    return false;
  }
});

var url = window.location.pathname;
$('.nav-item a[href="' + url + '"]').addClass('active');
console.log(url)