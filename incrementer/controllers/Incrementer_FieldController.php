<?php
namespace Craft;

class Incrementer_FieldController extends BaseController
{
    protected $allowAnonymous = true;

    /**
     * Increment a field by entry ID and field handle
     */
    public function actionIncrement()
    {
        $request = craft()->request->getPost();
        $result = craft()->incrementer_incrementer->increment($request['entryId'], $request['fieldHandle'], $request['incrementBy']);
        $this->returnJson([
            'success' => true,
            'value' => $result
        ]);
    }

    /**
     * Decrement a field by entry ID and field handle
     */
    public function actionDecrement()
    {
        $request = craft()->request->getPost();
        $result = craft()->incrementer_incrementer->decrement($request['entryId'], $request['fieldHandle'], $request['decrementBy']);
        $this->returnJson([
            'success' => true,
            'value' => $result
        ]);
    }
}