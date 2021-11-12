# Architecture de la DB

---

- highlights
  - game_id
  

- games (products)
  - editor_id
  - filtre sur "top games"
  - filtre sur "latest games"


- editors


- images
  - game_id


- category_game
  - category_id
  - game_id


- categories
  - parent_id (nullable)


- platforms
  - filtre "features"


- game_platform
  - game_id
  

---


- orders
  - user_id


- game_order
  - game_id
  - order_id
  - quantity
  - discount

  
- users


- game_user
  - game_id
  - user_id
  - rating
  - comment


- payments
  - vendor_id
  - order_id

  