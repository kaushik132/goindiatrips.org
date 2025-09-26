<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ContactUs;

class ContactUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ContactUs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactUs());

        $grid->column('id', __('Id'));
        $grid->column('fname', __('Fname'));
        $grid->column('lname', __('Lname'));
        $grid->column('email', __('Email'));
        $grid->column('terms', __('Terms'))->display(function ($terms) {
            if ($terms == 1) {
            return '<span style="color: green;">Accepted</span>';
            }
            return $terms;
        });         $grid->column('message', __('Message'));


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
        $show = new Show(ContactUs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('fname', __('Fname'));
        $show->field('lname', __('Lname'));
        $show->field('email', __('Email'));
        $show->field('terms', __('Terms'));
        $show->field('message', __('Message'));
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
        $form = new Form(new ContactUs());

        $form->text('fname', __('Fname'));
        $form->text('lname', __('Lname'));
        $form->email('email', __('Email'));
        $form->text('terms', __('Terms'));
        $form->textarea('message', __('Message'));

        return $form;
    }
}
