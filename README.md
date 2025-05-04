# Laravel Blog System

## Project Description
A Laravel-based article management system that displays categorized articles with:
- Blade template layouts
- SQLite database integration
- Article and Category models with migrations
- Factory-generated dummy data
- Database seeding functionality
- Basic article listing (title, date)

## Technical Specifications
- **Framework**: Laravel 10+
- **Database**: SQLite
- **Templates**: Blade with master layout
- **Features**:
  - Shared header/navigation/footer
  - Article CRUD operations
  - Category organization
  - Automated testing data

## Installation Guide

### Prerequisites
- PHP 8.0+
- Composer
- SQLite

### Setup Steps
1. Clone repository:
```bash
git clone [repository-url]
cd blog-system
```

2. Install dependencies:
```bash
composer install
```

3. Configure database:
```bash
touch database/database.sqlite
```

4. Migrate and seed:
```bash
php artisan migrate --seed
```

5. Start server:
```bash
php artisan serve
```

## File Structure
```
app/
  Models/
    Article.php
    Category.php
database/
  factories/
    ArticleFactory.php
    CategoryFactory.php
  migrations/
  seeders/
resources/
  views/
    layouts/
      app.blade.php
    articles/
      index.blade.php
```

## How to Contribute
1. Fork the project
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Open a pull request

## License
MIT License

Note: Remember to exclude sensitive files (.env) before pushing to GitHub.
