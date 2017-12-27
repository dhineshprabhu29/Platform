<?php

return [

    /**
     * Settings text strings
     * Contains all text strings used in the general settings sections of DocsPen
     * including users and roles.
     */

    'settings' => 'Настройки',
    'settings_save' => 'Сохранить настройки',
    'settings_save_success' => 'Настройки сохранены',

    /**
     * App settings
     */

    'app_settings' => 'Настройки приложения',
    'app_name' => 'Имя приложения',
    'app_name_desc' => 'Это имя отображается в заголовке и в любых письмах.',
    'app_name_header' => 'Показать имя приложения в заголовке?',
    'app_public_viewing' => 'Разрешить публичный просмотр?',
    'app_secure_images' => 'Включить загрузку изображений с более высокой безопасностью?',
    'app_secure_images_desc' => 'По соображениям производительности все изображения являются общедоступными. Этот параметр добавляет случайную, труднодоступную строку перед образами изображений. Убедитесь, что индексация каталогов не включена, чтобы предотвратить к ним легкий доступ.',
    'app_editor' => 'Редактор страницы',
    'app_editor_desc' => 'Выберите, какой редактор будет использоваться всеми пользователями для редактирования страниц.',
    'app_custom_html' => 'Пользовательский контент заголовка HTML',
    'app_custom_html_desc' => 'Любой контент, добавленный здесь, будет вставлен в нижнюю часть раздела <head> каждой страницы. Это удобно для переопределения стилей или добавления кода аналитики.',
    'app_logo' => 'Лого приложения',
    'app_logo_desc' => 'Это изображение должно быть 43px в высоту. <br>Большее изображение будет уменьшено.',
    'app_primary_color' => 'Главный цвет приложения',
    'app_primary_color_desc' => 'Это должно быть указано в hex. <br>Оставьте пустым чтобы использовать цвет по-умолчанию.',
    'app_homepage' => 'Домашняя страница приложения',
    'app_homepage_desc' => 'Выберите страницу, которая будет отображаться на главной странице вместо стандартной. Права на страницы игнорируются для выбранных страниц.',
    'app_homepage_default' => 'Выбрана домашняя страница по-умолчанию',
    'app_disable_comments' => 'Отключить комментарии',
    'app_disable_comments_desc' => 'Отключить комментарии на всех страницах приложения. Существующие комментарии не отображаются.',

    /**
     * Registration
     */

    'reg_settings' => 'Настройки регистрации',
    'reg_allow' => 'Открыть регистрацию?',
    'reg_default_role' => 'Роль пользователя по-умолчанию после регистрации',
    'reg_confirm_email' => 'Требуется подтверждение по электронной почте?',
    'reg_confirm_email_desc' => 'Если используется ограничение домена, тогда потребуется подтверждение по электронной почте и этот пункт будет проигнорирован.',
    'reg_confirm_restrict_domain' => 'Ограничить регистрацию по домену',
    'reg_confirm_restrict_domain_desc' => 'EВведите список доменов электронной почты, разделенных запятыми, на которые вы хотели бы ограничить регистрацию. Пользователям будет отправлено электронное письмо, чтобы подтвердить их адрес, прежде чем им разрешат взаимодействовать с приложением. <br> Обратите внимание, что пользователи смогут изменять свои адреса электронной почты после успешной регистрации.',
    'reg_confirm_restrict_domain_placeholder' => 'Нет ограничений',

    /**
     * Role settings
     */

    'roles' => 'Роли',
    'role_user_roles' => 'Роли пользователя',
    'role_create' => 'Создать новую роль',
    'role_create_success' => 'Роль упешно создана',
    'role_delete' => 'Удалить роль',
    'role_delete_confirm' => 'Это удалит роль с именем \':roleName\'.',
    'role_delete_users_assigned' => 'Эта роль имеет :userCount пользователей привязанных к ней. Если вы хотите перенести пользователей из этой роли, выберите новую роль ниже.',
    'role_delete_no_migration' => "Не мигрировать пользователей",
    'role_delete_sure' => 'Вы уверены что хотите удалить данную роль?',
    'role_delete_success' => 'Роль успешно удалена',
    'role_edit' => 'Редактировать роль',
    'role_details' => 'Детали роли',
    'role_name' => 'Имя роли',
    'role_desc' => 'Короткое описание роли',
    'role_system' => 'Системные разрешения',
    'role_manage_users' => 'Управление пользователями',
    'role_manage_roles' => 'Управление ролями и правами на роли',
    'role_manage_entity_permissions' => 'Управление правами на все книги, главы и страницы',
    'role_manage_own_entity_permissions' => 'Управление разрешениями для собственных книг, разделов и страниц',
    'role_manage_settings' => 'Управление настройками приложения',
    'role_asset' => 'Разрешение для активации',
    'role_asset_desc' => 'Эти разрешения контролируют доступ по-умолчанию к параметрам внутри системы. Разрешения на книги, главы и страницы перезапишут эти разрешения.',
    'role_all' => 'Все',
    'role_own' => 'Владелец',
    'role_controlled_by_asset' => 'Регилируемые активацией они загружаются в',
    'role_save' => 'Сохранить роль',
    'role_update_success' => 'Роль успешно обновлена',
    'role_users' => 'Пользователи с данной ролью',
    'role_users_none' => 'Нет пользователей с данной ролью',

    /**
     * Users
     */

    'users' => 'Пользователи',
    'user_profile' => 'Профиль пользователя',
    'users_add_new' => 'Добавить нового пользователя',
    'users_search' => 'Поиск пользователей',
    'users_role' => 'Роли пользователя',
    'users_external_auth_id' => 'Внешний ID аутентификации',
    'users_password_warning' => 'Введите ниже свой пароль новый пароль для его изменения:',
    'users_system_public' => 'Этот пользователь представляет любых гостевых пользователей, которые посещают ваше приложение. Он не может использоваться для входа в систему и назначается автоматически.',
    'users_delete' => 'Удалить пользователя',
    'users_delete_named' => 'Удалить пользователя :userName',
    'users_delete_warning' => 'Это полностью удалит этого пользователя с именем \':userName\' из системы.',
    'users_delete_confirm' => 'Вы уверены что хотите удалить этого пользователя?',
    'users_delete_success' => 'Пользователи успешно удалены',
    'users_edit' => 'Редактировать польщователя',
    'users_edit_profile' => 'Редактировать профиль',
    'users_edit_success' => 'Пользователь успешно обновлён',
    'users_avatar' => 'Аватар пользователя',
    'users_avatar_desc' => 'Это изображение должно быть размером около 256 пикселей.',
    'users_preferred_language' => 'Предпочитаемый язык',
    'users_social_accounts' => 'Аккаунты Соцсетей',
    'users_social_accounts_info' => 'Здесь вы можете подключить другие учетные записи для более быстрого и легкого входа в систему. Отключение учетной записи здесь не разрешено. Отменить доступ к настройкам вашего профиля в подключенном социальном аккаунте.',
    'users_social_connect' => 'Подключить аккаунт',
    'users_social_disconnect' => 'Отключить аккаунт',
    'users_social_connected' => ':socialAccount аккаунт упешно подключён к вашему профилю.',
    'users_social_disconnected' => ':socialAccount аккаунт успешно отключён от вашего профиля.',


];
