<?php
namespace getjump\Vk\Model;

/**
 * Class User
 * Just a User Model
 * @package getjump\Vk\Model
 */
class User extends BaseModel
{
    /**
     * @return string
     */
    public function getName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getStatusAudio()
    {
        if (!$this->status_audio) {
            return false;
        }
        return new StatusAudio($this->status_audio);
    }
}
