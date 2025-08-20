jQuery(document).ready(function ($) {
	const toggleFilters = () => {
		let filters = $('#filters')
		filters.toggleClass('hidden')
	}

	$('#filterBtn').on('click', toggleFilters)
})

document.addEventListener('DOMContentLoaded', function () {
	const mainImage = document.getElementById('main-image')
	const thumbnails = document.querySelectorAll('.thumbnails .thumbnail')
	const thumbnailsContainer = document.querySelector('.thumbnails')
	const scrollUpBtn = document.getElementById('scroll-up')
	const scrollDownBtn = document.getElementById('scroll-down')

	thumbnails.forEach(thumbnail => {
		thumbnail.addEventListener('click', function () {
			const newSrc = this.getAttribute('data-large')
			mainImage.src = newSrc
		})
	})

	if (scrollUpBtn) {
		scrollUpBtn.addEventListener('click', function () {
			thumbnailsContainer.scrollBy(0, -80)
		})
	}

	if (scrollDownBtn) {
		scrollDownBtn.addEventListener('click', function () {
			thumbnailsContainer.scrollBy(0, 80)
		})
	}
})

document.addEventListener('DOMContentLoaded', () => {
	const tabLinks = document.querySelectorAll('.tab-links a')
	const tabs = document.querySelectorAll('.tab')

	tabLinks.forEach(link => {
		link.addEventListener('click', function (e) {
			e.preventDefault()
			const target = this.getAttribute('href')

			// Удаляем активные классы
			tabs.forEach(tab => tab.classList.remove('active'))
			tabLinks.forEach(link => link.parentElement.classList.remove('active'))

			// Добавляем активные классы к выбранной вкладке
			document.querySelector(target).classList.add('active')
			this.parentElement.classList.add('active')

			// Проверка, если тег a указывает на id "additional-info"
			if (target === '#additional-info') {
				document.getElementById('tab-content').style.padding = 0
			} else {
				document.getElementById('tab-content').style.padding = '20px'
			}
		})
	})
})
