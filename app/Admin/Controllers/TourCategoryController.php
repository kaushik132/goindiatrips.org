<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\TourCategory;

class TourCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TourCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TourCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'));



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
        $show = new Show(TourCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('slug', __('Slug'));
        $show->field('seo_title', __('Seo title'));
        $show->field('seo_description', __('Seo description'));
        $show->field('seo_keyword', __('Seo keyword'));
        $show->field('status', __('Status'));
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
        $form = new Form(new TourCategory());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
           $form->hidden('slug');
     $form->saving(function (Form $form) {

           $form->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-',trim($form->name)));
        });
        $form->textarea('seo_title', __('Seo title'));
        $form->textarea('seo_description', __('Seo description'));
        $form->textarea('seo_keyword', __('Seo keyword'));
        $form->select('status', __('Status'))->options([1 => 'Active', 0 => 'Inactive'])->default(1);

        return $form;
    }
}
