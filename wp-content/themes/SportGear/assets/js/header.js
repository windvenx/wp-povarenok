jQuery(document).ready(function ($) {
    // Функция для открытия мобильного меню
    const openMenu = () => {
        $('#mobile-menu').removeClass('hidden hide').addClass('show')
    }

    // Функция для закрытия мобильного меню с анимацией
    const closeMenu = () => {
        $('#mobile-menu').removeClass('show').addClass('hide')
        setTimeout(() => {
            $('#mobile-menu').addClass('hidden')
        }, 300) // Скрываем меню после окончания анимации
    }

    // Открытие мобильного меню
    $('#burger-button').on('click', openMenu)

    // Закрытие мобильного меню
    $('#close-menu').on('click', closeMenu)

    // Закрытие мобильного меню при клике на пункт меню
    $('#mobile-menu a').on('click', closeMenu)

    // Открытие и закрытие подменю с закрытием других подменю
    $('.toggle-submenu').on('click', function () {
        const $submenu = $(this).closest('div').next('.submenu')

        // Закрыть другие подменю
        $('.submenu').not($submenu).addClass('hidden')

        // Показать или скрыть текущее подменю
        $submenu.toggleClass('hidden')
        $(this).toggleClass('rotate-45') // Поворот иконки
    })

    // Универсальная функция для переключения dropdown меню
    const toggleDropdown = (buttonId, dropdownId) => {
        $(`#${buttonId}`).on('click', function (e) {
            e.preventDefault()
            const $dropdown = $(`#${dropdownId}`)
            $dropdown.toggleClass('hidden').toggleClass('fade-out')
            if ($dropdown.hasClass('fade-out')) {
                setTimeout(() => $dropdown.removeClass('fade-out'), 300) // Убираем fade-out после анимации
            }
        })
    }

    toggleDropdown('contacts-button', 'contacts-dropdown')

    // Закрытие dropdown при клике вне его области
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#contacts-button, #contacts-dropdown').length) {
            $('#contacts-dropdown').addClass('hidden')
        }
    })

    // Закрытие всех dropdown при прокрутке страницы
    $(window).on('scroll', function () {
        $('#contacts-dropdown').addClass('hidden')
    })



    // Функция для выполнения поиска
    const performSearch = () => {
        let searchTerm = $('#product-search').val()
        if (searchTerm.length > 0) {
            let url = '/?s=' + encodeURIComponent(searchTerm)
            window.location.href = url // Редирект на сформированный URL
        }
    }

    // Обработчик клика на кнопку поиска
    $('#search-button').on('click', function (e) {
        e.preventDefault()
        performSearch()
    })

    // Обработчик нажатия Enter в поле поиска
    $('#product-search').on('keydown', function (e) {
        if (e.keyCode === 13) {
            // Проверка нажатия клавиши Enter
            e.preventDefault()
            performSearch()
        }
    })
})