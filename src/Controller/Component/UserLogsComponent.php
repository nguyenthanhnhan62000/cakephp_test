<?php

declare(strict_types=1);

namespace App\Controller\Component;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Http\ServerRequest;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * UserLogs component
 */
class UserLogsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function saveIP($user_id)
    {
        $request = new ServerRequest();
        $userlogTable = TableRegistry::getTableLocator()->get('UserLogs');
        $userlog = $userlogTable->newEmptyEntity();
        $userlog->user_id = $user_id;
        $userlog->ip = $request->clientIp();
        $userlogTable->save($userlog);

    }
}
