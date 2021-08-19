$orderObj = \Bitrix\Sale\Order::getList([
    'select' => ['ID','PRICE','DATE_INSERT'],
    'filter' => ['!=STATUS_ID' => ['F', 'D']],
    // 'order' => ['ID' => 'ASC'],
    // 'limit' => 1
  ]);
while($orderData = $orderObj->fetch())
{
    $arr[] = $orderData['ID'];
}
