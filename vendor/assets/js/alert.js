$(function () {
	var Toast = Swal.mixin({
		toast: true,
		position: "top-end",
		showConfirmButton: false,
		timer: 3000,
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
	}
	if (swallSuccessTitle) {
		Swal.fire({
			icon: "success",
			title: swallSuccessTitle,
			text: swallSuccessText,
			showConfirmButton: false,
			timer: 1200,
		});
	} else {
		return null;
	}
});
