<?php


use Illuminate\Database\Seeder;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Створення прав та ролей користувачів

        $admin = new App\Role();
        $admin->name = 'admin';
        $admin->display_name = 'Адміністратор';
        $admin->description = 'Може все';
        $admin->save();

        $moderator = new App\Role();
        $moderator->name = 'moder';
        $moderator->display_name = 'Модератор';
        $moderator->description = 'Проводить модерацію статей';
        $moderator->save();

        $user = new App\Role();
        $user->name = 'user';
        $user->display_name = 'Користувач';
        $user->description = 'Створює статті, пише коменти';
        $user->save();

        $createPost = new App\Permission();
        $createPost->name = 'create-post';
        $createPost->display_name = 'Створення поста';
        $createPost->description = 'Стоворення поста';
        $createPost->save();

        $deletePost = new App\Permission();
        $deletePost->name = 'del-post';
        $deletePost->display_name = 'Видалення поста';
        $deletePost->description = 'Видалення поста';
        $deletePost->save();

        $publishArticle = new App\Permission();
        $publishArticle->name = 'publish-article';
        $publishArticle->display_name = 'Публікація статті';
        $publishArticle->description = 'Публікація статті';
        $publishArticle->save();

        $banUser = new App\Permission();
        $banUser->name = 'ban-user';
        $banUser->display_name = 'Забанити користувача';
        $banUser->description = 'Забанити користувача';
        $banUser->save();

        $admin->attachPermissions([
            $createPost,
            $deletePost,
            $publishArticle,
            $banUser,
        ]);

        $moderator->attachPermissions([
            $createPost,
            $deletePost,
            $publishArticle,
        ]);

        $user->attachPermissions([
            $createPost
        ]);
    }
}
