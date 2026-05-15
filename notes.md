blog-platform/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   └── ForgotPasswordController.php
│   │   │   │
│   │   │   ├── Frontend/
│   │   │   │   ├── HomeController.php
│   │   │   │   ├── PostController.php
│   │   │   │   ├── CategoryController.php
│   │   │   │   ├── TagController.php
│   │   │   │   ├── ProfileController.php
│   │   │   │   └── CommentController.php
│   │   │   │
│   │   │   ├── Dashboard/
│   │   │   │   ├── DashboardController.php
│   │   │   │   ├── PostController.php
│   │   │   │   ├── CategoryController.php
│   │   │   │   ├── TagController.php
│   │   │   │   ├── UserController.php
│   │   │   │   ├── RoleController.php
│   │   │   │   └── CommentModerationController.php
│   │   │   │
│   │   │   └── Api/
│   │   │       ├── PostApiController.php
│   │   │       └── AuthApiController.php
│   │   │
│   │   ├── Middleware/
│   │   │   ├── AdminMiddleware.php
│   │   │   └── AuthorMiddleware.php
│   │   │
│   │   └── Requests/
│   │       ├── StorePostRequest.php
│   │       ├── UpdatePostRequest.php
│   │       ├── StoreCommentRequest.php
│   │       └── UpdateProfileRequest.php
│   │
│   ├── Models/
│   │   ├── User.php
│   │   ├── Post.php
│   │   ├── Category.php
│   │   ├── Tag.php
│   │   ├── Comment.php
│   │   ├── Role.php
│   │   └── Like.php
│   │
│   ├── Policies/
│   │   ├── PostPolicy.php
│   │   └── CommentPolicy.php
│   │
│   ├── Services/
│   │   ├── ImageUploadService.php
│   │   ├── SlugService.php
│   │   └── PostPublishService.php
│   │
│   └── Providers/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   │   ├── UserFactory.php
│   │   ├── PostFactory.php
│   │   ├── CategoryFactory.php
│   │   ├── TagFactory.php
│   │   └── CommentFactory.php
│   │
│   ├── migrations/
│   │   ├── create_users_table.php
│   │   ├── create_roles_table.php
│   │   ├── create_posts_table.php
│   │   ├── create_categories_table.php
│   │   ├── create_tags_table.php
│   │   ├── create_comments_table.php
│   │   ├── create_post_tag_table.php
│   │   ├── create_likes_table.php
│   │   └── add_role_id_to_users_table.php
│   │
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── UserSeeder.php
│       ├── RoleSeeder.php
│       ├── CategorySeeder.php
│       ├── TagSeeder.php
│       └── PostSeeder.php
│
├── public/
│   ├── images/
│   ├── uploads/
│   └── build/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php
│       │   ├── frontend.blade.php
│       │   ├── dashboard.blade.php
│       │   └── guest.blade.php
│       │
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── footer.blade.php
│       │   ├── sidebar.blade.php
│       │   ├── post-card.blade.php
│       │   └── alert.blade.php
            ├──forms/
                ├── input.blade.php
                ├── textarea.blade.php
                ├── select.blade.php
                ├── checkbox.blade.php
                ├── radio.blade.php
                ├── label.blade.php
                ├── error.blade.php
                └── button.blade.php
│       │
│       ├── frontend/
│       │   ├── home.blade.php
│       │   ├── posts/
│       │   │   ├── index.blade.php
│       │   │   ├── show.blade.php
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   └── my-posts.blade.php
│       │   │
│       │   ├── categories/
│       │   │   └── show.blade.php
│       │   │
│       │   ├── profile/
│       │   │   ├── show.blade.php
│       │   │   └── edit.blade.php
│       │   │
│       │   └── auth/
│       │       ├── login.blade.php
│       │       ├── register.blade.php
│       │       └── forgot-password.blade.php
│       │
│       ├── dashboard/
│       │   ├── index.blade.php
│       │   │
│       │   ├── posts/
│       │   │   ├── index.blade.php
│       │   │   ├── create.blade.php
│       │   │   ├── edit.blade.php
│       │   │   └── trash.blade.php
│       │   │
│       │   ├── users/
│       │   │   ├── index.blade.php
│       │   │   ├── create.blade.php
│       │   │   └── edit.blade.php
│       │   │
│       │   ├── categories/
│       │   ├── comments/
│       │   └── settings/
│       │
│       └── errors/
│           ├── 404.blade.php
│           └── 500.blade.php
|
        resources/views/components
│
├── routes/
│   ├── web.php
│   ├── api.php
│   ├── auth.php
│   └── console.php
│
├── storage/
│
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── .env
├── artisan
├── composer.json
├── package.json
└── vite.config.js