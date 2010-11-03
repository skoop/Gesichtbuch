<?php

class FrontendUpdateForm extends gbUpdateForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);

        $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
    }
}