<?php

class SportGear
{
    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        // Добавление основного меню
        add_action("admin_menu", [$this, 'add_menu_page']);
        // Обработка данных формы при сохранении
        add_action('admin_init', [$this, 'process_form']);
        add_action('admin_menu', [$this, 'remove_parent_menu'], 999); // Удаление основного меню после его добавления
    }

    public function add_menu_page()
    {
        add_menu_page(
            'Sport Gear',               // Название страницы
            'Sport Gear',               // Текст в меню
            'manage_options',           // Способность управления
            'sport-gear',               // Уникальный slug
            '__return_null',            // Пустая функция, чтобы страница не открывалась
            get_template_directory_uri() . '/assets/image/svg/SPORTGEAR-removebg-preview.svg',            // Иконка в меню
            20                          // Позиция в меню
        );

        // Добавление подменю "Телефон"
        add_submenu_page(
            'sport-gear',               // Уникальный slug родительского меню
            'Телефон',                  // Название страницы
            'Телефон',                  // Текст в меню
            'manage_options',           // Способность управления
            'sport-gear-phone',         // Уникальный slug подменю
            [$this, 'menu']             // Функция отображения
        );
    }

    public function remove_parent_menu()
    {
        remove_submenu_page('sport-gear', 'sport-gear'); // Удаление дублирующего подменю
    }

    public function process_form()
    {
        if (isset($_POST['sportgear_contacts']) && is_array($_POST['sportgear_contacts'])) {
            $contacts = array_map('sanitize_text_field', $_POST['sportgear_contacts']);
            $descriptions = array_map('sanitize_text_field', $_POST['contact_descriptions']);
            $icons = array_map('sanitize_text_field', $_POST['contact_icons']);

            $combined_data = [];
            foreach ($contacts as $index => $contact) {
                $combined_data[] = [
                    'contact' => $contact,
                    'description' => $descriptions[$index] ?? '',
                    'icon' => $icons[$index] ?? ''
                ];
            }
            update_option('sportgear_contacts', $combined_data);
            add_settings_error('sportgear_contacts', 'sportgear_contacts_message', 'Contacts updated', 'updated');
        }
    }

    public function menu()
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        $contacts = get_option('sportgear_contacts', []);
        ?>
        <div class="wrap">
            <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
            <form method="post" action="">
                <?php settings_errors('sportgear_contacts'); ?>
                <div id="contacts-wrapper">
                    <?php
                    foreach ($contacts as $index => $data) {
                        $this->render_contact_field($data['contact'], $data['description'], $data['icon'], $index);
                    }
                    ?>
                </div>
                <button type="button" id="add-contact" class="button">Add Contact</button>
                <?php submit_button('Save Contacts'); ?>
            </form>
        </div>



        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var contactsWrapper = document.getElementById('contacts-wrapper');
                var addContactButton = document.getElementById('add-contact');

                // Добавление нового поля для контакта
                addContactButton.addEventListener('click', function() {
                    var newField = document.createElement('div');
                    newField.classList.add('contact-field');
                    newField.innerHTML = `
                <input type="text" name="sportgear_contacts[]" placeholder="Phone Number" value="" />
                <input type="text" name="contact_descriptions[]" placeholder="Description" value="" />
                <input type="text" name="contact_icons[]" placeholder="Icon URL" value="" />
                <button type="button" class="remove-contact button">Remove</button>
            `;
                    contactsWrapper.appendChild(newField);
                });

                // Делегирование события для удаления контакта
                contactsWrapper.addEventListener('click', function(event) {
                    if (event.target.classList.contains('remove-contact')) {
                        event.target.closest('.contact-field').remove();
                    }
                });
            });
        </script>


        <style>
            .contact-field {
                margin-bottom: 10px;
            }

            .contact-field input {
                margin-right: 10px;
            }
        </style>
        <?php
    }

    private function render_contact_field($contact, $description, $icon, $index)
    {
        ?>
        <div class="contact-field">
            <input type="text" name="sportgear_contacts[]" placeholder="Phone Number" value="<?php echo esc_attr($contact); ?>" />
            <input type="text" name="contact_descriptions[]" placeholder="Description" value="<?php echo esc_attr($description); ?>" />
            <input type="text" name="contact_icons[]" placeholder="Icon URL" value="<?php echo esc_attr($icon); ?>" />
            <button type="button" class="remove-contact button">Remove</button>
        </div>
        <?php
    }
}