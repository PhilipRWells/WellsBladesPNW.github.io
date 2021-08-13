const TIPS_DATA = [
  { option: "tip_1", image: "./images/knife/tips/a.png", name: "tip 1" },
  { option: "tip_2", image: "./images/knife/tips/b.jpg", name: "tip 2" },
  { option: "tip_3", image: "./images/knife/tips/c.jpg", name: "tip 3" },
  { option: "tip_4", image: "./images/knife/tips/d.jpg", name: "tip 4" },
  { option: "tip_5", image: "./images/knife/tips/e.jpg", name: "tip 5" },
  { option: "tip_6", image: "./images/knife/tips/a.png", name: "tip 6" },
  { option: "tip_7", image: "./images/knife/tips/b.jpg", name: "tip 7" },
  { option: "tip_8", image: "./images/knife/tips/c.jpg", name: "tip 8" },
  { option: "tip_9", image: "./images/knife/tips/d.jpg", name: "tip 9" },
  { option: "tip_10", image: "./images/knife/tips/e.jpg", name: "tip 10" },
  { option: "tip_11", image: "./images/knife/tips/a.png", name: "tip 11" },
  { option: "tip_12", image: "./images/knife/tips/b.jpg", name: "tip 12" },
];

const MIDDLE_DATA = [
  {
    option: "middle_1",
    image: "./images/knife/middle/a.png",
    name: "middle 1",
  },
  {
    option: "middle_2",
    image: "./images/knife/middle/b.jpg",
    name: "middle 2",
  },
  {
    option: "middle_3",
    image: "./images/knife/middle/c.jpg",
    name: "middle 3",
  },
  {
    option: "middle_4",
    image: "./images/knife/middle/d.jpg",
    name: "middle 4",
  },
  {
    option: "middle_5",
    image: "./images/knife/middle/e.jpg",
    name: "middle 5",
  },
  {
    option: "middle_6",
    image: "./images/knife/middle/a.png",
    name: "middle 6",
  },
  {
    option: "middle_7",
    image: "./images/knife/middle/b.jpg",
    name: "middle 7",
  },
  {
    option: "middle_8",
    image: "./images/knife/middle/c.jpg",
    name: "middle 8",
  },
  {
    option: "middle_9",
    image: "./images/knife/middle/d.jpg",
    name: "middle 9",
  },
  {
    option: "middle_10",
    image: "./images/knife/middle/e.jpg",
    name: "middle 10",
  },
];

const HANDLE_DATA = [
  {
    option: "handle_1",
    image: "./images/knife/handle/a.png",
    name: "handle 1",
  },
  {
    option: "handle_2",
    image: "./images/knife/handle/b.jpg",
    name: "handle 2",
  },
  {
    option: "handle_3",
    image: "./images/knife/handle/c.jpg",
    name: "handle 3",
  },
  {
    option: "handle_4",
    image: "./images/knife/handle/d.jpg",
    name: "handle 4",
  },
  {
    option: "handle_5",
    image: "./images/knife/handle/e.jpg",
    name: "handle 5",
  },
  {
    option: "handle_6",
    image: "./images/knife/handle/a.png",
    name: "handle 6",
  },
  {
    option: "handle_7",
    image: "./images/knife/handle/b.jpg",
    name: "handle 7",
  },
  {
    option: "handle_8",
    image: "./images/knife/handle/c.jpg",
    name: "handle 8",
  },
  {
    option: "handle_9",
    image: "./images/knife/handle/d.jpg",
    name: "handle 9",
  },
  {
    option: "handle_10",
    image: "./images/knife/handle/e.jpg",
    name: "handle 10",
  },
  {
    option: "handle_11",
    image: "./images/knife/handle/a.png",
    name: "handle 11",
  },
  {
    option: "handle_12",
    image: "./images/knife/handle/b.jpg",
    name: "handle 12",
  },
];

$(document).ready(function () {
  $(".tips img").attr("src", TIPS_DATA[0].image);
  $(".middle img").attr("src", MIDDLE_DATA[0].image);
  $(".handle img").attr("src", HANDLE_DATA[0].image);
});

$(".contact-form").submit((event) => {
  event.preventDefault();
  let formData = {};
  $(".contact-form input, .contact-form textarea").each((index, input) => {
    formData[input.name] = input.value;
  });

  formData.tip = TIPS_DATA.filter((x) => x.option === $("#tips").val())[0].name;
  formData.middle = MIDDLE_DATA.filter(
    (x) => x.option === $("#middle").val()
  )[0].name;
  formData.handle = HANDLE_DATA.filter(
    (x) => x.option === $("#handle").val()
  )[0].name;

  console.log(formData);

  $.ajax({
    url: "./sendemail.php",
    type: "POST",
    data: { data: formData },
    success: function (response) {
      response = $.parseJSON(response);
      if (response.success) {
        iziToast.success({
          title: "OK",
          message: response.message,
        });
        setTimeout(() => {
          // Reload while moving the browser to the top
          window.location.href = window.location.href;
        }, 2000);
      } else {
        iziToast.error({
          title: "Error",
          message: response.message,
        });
      }
    },
    error: function () {
      //In case ajax call has error
      console.log("Error occured while submitting the data");
    },
  });
});

$("#tips").change((event) => {
  let selectedTip = TIPS_DATA.filter((x) => x.option === event.target.value)[0];
  $(".tips img").attr("src", selectedTip.image);
});

$("#middle").change((event) => {
  let selectedMiddle = MIDDLE_DATA.filter(
    (x) => x.option === event.target.value
  )[0];
  $(".middle img").attr("src", selectedMiddle.image);
});

$("#handle").change((event) => {
  let selectedHandle = HANDLE_DATA.filter(
    (x) => x.option === event.target.value
  )[0];
  $(".handle img").attr("src", selectedHandle.image);
});
