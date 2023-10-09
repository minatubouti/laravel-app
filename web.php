Route::get('/', 'TodolistFormController@index');
Route::get('/create-page', 'TodolistFormController@createPage');
Route::post('/create', 'TodolistFormController@create');
Route::get('/edit-page/{id}', 'TodolistFormController@editPage');
Route::post('/edit', 'TodolistFormController@edit');
Route::get('/delete-page/{id}', 'TodolistFormController@deletePage');
Route::post('/delete/{id}', 'TodolistFormController@delete');