<?php

namespace Mutum\Bundle\MigrationBundle\Manager;

use Mutum\Bundle\V1Bundle\Entity\PozRequest;
use Mutum\Bundle\V2Bundle\Entity\ArticleState;
use Mutum\Bundle\V2Bundle\Entity\Discussion;
use Mutum\Bundle\V2Bundle\Entity\Message;
use Mutum\Bundle\V2Bundle\Entity\Request;
use Mutum\Bundle\V2Bundle\Entity\Speakers;

class DiscussionManager extends BaseManager
{
    public function createByRequest(Request $request, PozRequest $object)
    {
        $discussion = new Discussion();
        $discussion->setDiscDateCreation($object->getReqDatetime());
        $discussion->setDiscName(substr($object->getReqMessage(), 0, 50));
        $discussion->setDiscAllGrantInvit(false);

        $message = new Message();
        $message->setMessDateCreation($object->getReqDatetime());
        $message->setMessText($object->getReqMessage());
        $message->setUser($request->getBorrower());
        $message->setDiscussion($discussion);
        $message->setMessClass('');


        $speaker = new Speakers();
        $speaker->setSpeaAdmin(false);
        $speaker->setSpeaArchived(false);
        $speaker->setDiscussion($discussion);
        $speaker->setUser($request->getBorrower());
        $speaker->setSpeaSeen(\DateTime::createFromFormat('Y-m-d H:i:s', '0000-00-00 00:00:00'));
        $this->getEntityManager()->persist($speaker);

        $speaker = new Speakers();
        $speaker->setSpeaAdmin(false);
        $speaker->setSpeaArchived(false);
        $speaker->setDiscussion($discussion);
        $speaker->setUser($request->getLender());
        $speaker->setSpeaSeen(\DateTime::createFromFormat('Y-m-d H:i:s', '0000-00-00 00:00:00'));
        $this->getEntityManager()->persist($speaker);

        $request->setRequDiscussion($discussion);


    }
}