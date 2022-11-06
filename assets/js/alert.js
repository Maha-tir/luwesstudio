$(function () {
	var Toast = Swal.mixin({
		toast: true,
		position: "top",
		showConfirmButton: false,
		timer: 1400,
	});

	$(".logout-action").on("click", function (e) {
		var link = $(this).attr("href");
		e.preventDefault();
		const loading = `<div class="alert-loading top"><div class="spinner"></div><span class="text-loading">Loading...</span></div>`;
		document.body.classList.add("get-logout__logout-action");
		document.body.style.overflowY = "hidden";
		document.body.innerHTML += loading;
		setTimeout(() => {
			document.body.classList.remove("get-logout__logout-action");
			document.body.style.overflowY = "auto";
			window.location.href = link;
		}, 1500);
	});

	// * FlashData Success
	const flashdataSuccess = $(".flashdata-success").data("flashdata");

	const swallSuccess = $(".swall-success"),
		swallSuccessTitle = $(".swall-success").data("title"),
		swallSuccessText = $(".swall-success").data("text");

	const swallError = $(".swall-error"),
		swallErrorTitle = $(".swall-error").data("title"),
		swallErrorText = $(".swall-error").data("text");

	// ! FlashData Error
	const flashdataError = $(".flashdata-error").data("flashdata");

	if (flashdataSuccess) {
		Toast.fire({
			icon: "success",
			title: flashdataSuccess,
		});
	} else if (flashdataError) {
		Toast.fire({
			icon: "error",
			title: flashdataError,
		});
	} else if (swallSuccessTitle) {
		Swal.fire({
			icon: "success",
			title: swallSuccessTitle,
			text: swallSuccessText,
			showConfirmButton: false,
			timer: 1200,
		});
	} else if (swallErrorTitle) {
		Swal.fire({
			icon: "error",
			title: swallErrorTitle,
			text: swallErrorText,
			showConfirmButton: false,
			timer: 1200,
		});
	} else {
		return null;
	}
});
