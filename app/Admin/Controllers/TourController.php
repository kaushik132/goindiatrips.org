<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Tour;
use \App\Models\TourCategory;

class TourController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tour';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tour());

        $grid->column('id', __('Id'));

               $grid->column('title', __('Title'));
        $grid->column('thumnail_image', __('Thumnail image'))->image('/uploads/', 100, 100);
             $states = [
            'on' => ['value' => 1, 'text' => 'Active', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'InActive', 'color' => 'default'],
        ];
       $grid->column('is_featured', __('Is Featured'))->switch($states);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Tour::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('tour_id', __('Tour id'));
        $show->field('thumnail_image', __('Thumnail image'));
        $show->field('banner_image', __('Banner image'));
        $show->field('gallery', __('Gallery'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('short_description', __('Short description'));
        $show->field('rating', __('Rating'));
        $show->field('review', __('Review'));
        $show->field('time_date', __('Time date'));
        $show->field('number_of_person', __('Number of person'));
        $show->field('description', __('Description'));
        $show->field('itinerarys', __('Itinerarys'));
        $show->field('included', __('Included'));
        $show->field('exclusions', __('Exclusions'));
        $show->field('price', __('Price'));
        $show->field('discount_price', __('Discount price'));
        $show->field('discount_off', __('Discount off'));
        $show->field('important-information', __('Important information'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Tour());

       $form->tab('Info', function ($form) {
     $form->select('tour_id',__('Tour Category'))->options(TourCategory::pluck('name', 'id'))->default(null)->rules('required');


        $form->text('title', __('Title'));
        $form->hidden('slug');

        $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->title)));
        });
        $form->text('rating', __('Rating'));
        $form->text('review', __('Review'));
        $form->text('time_date', __('Time date'));
        $form->text('number_of_person', __('Number of person'));
        $form->textarea('short_description', __('Short description'));
        $form->ckeditor('description', __('Description'));

  });

    $form->tab('Images', function ($form) {

        $form->image('thumnail_image', __('Thumnail image'));
        $form->image('banner_image', __('Banner image'));
        $form->multipleImage('gallery', __('Gallery'));
});
               // $form->textarea('itinerarys', __('Itinerarys'));
             $form->tab('PackageItinerary', function ($form) {
        $form->hasMany('packagedetailsinsert','PackageItinerary', function (Form\NestedForm $form) {
		          $form->text('order_num', __('Order Num'));
		          $form->text('name', __('Name'));
                  $form->time('time', __('Time'));
			        $form->textarea('description', __('Description'));
		     });


});
   $form->tab('Included & Exclusions', function ($form) {
        $form->textarea('included', __('Included'));
        $form->textarea('exclusions', __('Exclusions'));
           });
    $form->tab('Price & Info', function ($form) {
        $form->text('price', __('Price'));
        $form->text('discount_price', __('Discount price'));
        $form->text('discount_off', __('Discount off'));
        $form->textarea('important-information', __('Important information'));
            $form->switch('is_featured', __('Is Featured'))->options([
    1 => 'Active',
    0 => 'Inactive',
    ]);
       });

        return $form;
    }
}
