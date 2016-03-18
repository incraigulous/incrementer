<?php
namespace Craft;

class Incrementer_IncrementerService extends BaseApplicationComponent
{
    /**
     * Get a field value by entry ID and field handle and increment it by decrement by $incrementBy.
     * The field value must be numeric.
     *
     * @param $entryId
     * @param $fieldHandle
     * @param int $incrementBy
     * @return mixed
     * @throws Exception
     */
    public function decrement($entryId, $fieldHandle, $decrementBy = 1)
    {
        return $this->increment($entryId, $fieldHandle, -$decrementBy);
    }

    /**
     * Get a field value by entry ID and field handle and increment it by increment by $incrementBy.
     * The field value must be numeric.
     *
     * @param $entryId
     * @param $fieldHandle
     * @param int $incrementBy
     * @return mixed
     * @throws Exception
     */
    public function increment($entryId, $fieldHandle, $incrementBy = 1)
    {
        $criteria = craft()->elements->getCriteria(ElementType::Entry);
        $entry = $criteria->id($entryId)->first();
        $value = $entry->$fieldHandle;
        if (!is_numeric($value)) throw new Exception('The field value is not numeric.');
        $entry->getContent()->$fieldHandle = $value + $incrementBy;
        $success = craft()->entries->saveEntry($entry);
        if (!$success) {
            throw new Exception('Error saving entry.');
        }
        return $criteria->id($entryId)->first()->$fieldHandle;
    }
}