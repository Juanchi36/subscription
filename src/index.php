<?php

require '../vendor/autoload.php';

use Juanma\Subscription\{
    TrialPlan,
    PaidPlan,
    GiftPlan,
    RegularSubscriber,
    PremiumSubscriber,
    AnnualSubscription,
    MonthlySubscription
};

$plan1 = new TrialPlan();
var_dump($plan1);
$plan2 = new PaidPlan();
//var_dump($plan2);
$plan3 = new GiftPlan();
//var_dump($plan3);
$subscriber1 = new RegularSubscriber();
//var_dump($subscriber1);
$subscriber2 = new PremiumSubscriber();
//var_dump($subscriber2);
$subscription1 = new AnnualSubscription();
//var_dump($subscription1);
$subscription2 = new MonthlySubscription();
//var_dump($subscription2);

$subscriber1->setEmail('subs1@.gmail.com');
//echo $subscriber1->getEmail('subs1@.gmail.com');

$subscriber1->subscribe($plan1);
$datosPlan = $subscriber1->getPlan();
var_dump($datosPlan);
var_dump($datosPlan);

  