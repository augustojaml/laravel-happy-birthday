(function ($) {
  $("input[name='whatsapp']").mask("00 00000-0000");
  $("input[name='date_of_birth']").mask("00/00/0000");
  $("#inputCaptcha").mask("00");

  // CAPTCHA

  function randomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  var captcha = $(".input-captcha");
  var valueA = randomInt(1, 15);
  var valueB = randomInt(1, 15);

  captcha.find("strong:eq(0)").text(valueA);
  captcha.find("strong:eq(1)").text(valueB);

  captcha.find("input").keyup(function () {
    var sum = valueA + valueB;
    Number($(this).val()) === sum
      ? $(".btn-captcha").prop("disabled", false)
      : $(".btn-captcha").prop("disabled", true);
  });

  $(".btn-captcha").click(function (event) {
    $(".btn-captcha").text("Aguarde...");
  });

  // FORM LOGION
  var contentLogin = $(".mt-login");
  var message = contentLogin.find(".message-content .message");
  $; //(".message-content").find(".message");

  contentLogin.find("form").submit(function (event) {
    event.preventDefault();
    $.ajaxSetup({
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
    });
    $.ajax({
      url: $(this).data("action"),
      async: "true",
      type: "POST",
      data: {
        email: $(this).find("input:eq(0)").val(),
        password: $(this).find("input:eq(1)").val(),
      },
      beforeSend: function () {
        message.text("");
        message.removeClass("danger");
      },
      success: function (response) {
        if (response.error) {
          message.text(response.error);
          message.addClass("danger");
        }
        if (response.redirect) {
          window.location.href = response.redirect;
        }
      },
    });
  });
})(jQuery);
