## Laravel TDD with PHP Unit ##
This app is developed using laravel 5.7 for TDD(Test Driven Development).


### Author Module
- name 
- address 

### Unit Tests
- tests/Unit/*

### Feature Tests
- tests/Feature/*


### Unit Tests Explanation
============================
#### Folder Structure
    .
    ├── Feature
    │   
    │── Unit
    │    └── Author
    |         │── AuthorCreateTest.php  ( 2 tests)
    │         │── AuthorListTest.php  ( 4 tests)
    │         │── AuthorSaveTest.php  (3 tests)
    │         │── AuthorShowTest.php  (2 tests)
    └──

#### AuthorCreateTest.php
1. can_call_author_crate_route
   - to sure to have `authors/create` route
2. return_author_create_view
   - to sure that `authors/create` route return `author.create` view


#### AuthorListTest.php
1. can_call_index_page_route
    - to sure to have `authors` route
2. can_return_view_author_index
    - to sure that `authors` route return `author.index` view
3. user_can_see_all_authors
    - to sure that user can see all authors' data
4. author_list_get_all_data_from_db
    - to sure that get all authors' data and pass to `author.index` view

#### AuthorSaveTest.php
1. can_save_author_data
    - to sure that `authors` save route is working properly
2. author_name_is_required
    - to sure that author's name is required to system
3. redirect_to_index_when_author_save_success
    - to sure to redirect to index listing page after saving author's data

#### AuthorShowTest.php
1. can_view_author_detail
    - to sure that user can view author's detail info in `authors/{author_id}` route
2. author_show_route_return_author_show_view
    - to sure to return view `author.show` when call `authors/{author_id}` route
3. author_show_view_has_author_data
    - to sure that `author.show` must be return with together author's data as `author`
4. will_show_404_when_author_not_found
    - to sure to show 404 error when user call `authors/{author_id}` route with author_id is not in our sytem