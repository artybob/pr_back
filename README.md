# Purchases requests backend

# how to run

1. docker-compose up -d (app url- localhost+ port :8000)
2. docker-compose exec app composer install
3. docker-compose exec app php artisan key:generate
4. docker-compose exec app php artisan migrate

to create some random purchases:

docker-compose exec app php artisan tinker 

factory(App\Purchase::class, 30)->create()

# API

# fetchPurchases (get) : purchases || error
/api/purchases

params:

page(optional) - page to show from paginator

sortBy(optional) - table field to sort (must exist in table fields)

desc(optional) - sorting option (desc asc) 1 or 0 

# createPurchase(post) + purchaseData : newPurchase || error
/api/purchases
