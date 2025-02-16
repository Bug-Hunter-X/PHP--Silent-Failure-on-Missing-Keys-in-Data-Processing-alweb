```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        // Assume $item is an array with a 'value' key
        if (isset($item['value'])) {
            $result[] = $item['value'];
        } else {
            // Handle cases where 'value' key is missing
            // In a real application, consider logging the error or throwing an exception
            // Instead of just ignoring
        }
    }
    return $result;
}

$data = [
    ['value' => 1],
    ['value' => 2],
    ['value' => 3],
    ['value' => 4],
    ['value' => 5],
    ['value' => 6],
    ['value' => 7],
    ['value' => 8],
    ['value' => 9],
    ['value' => 10],
];

$processedData = processData($data);
print_r($processedData);

$data2 = [
    ['value' => 1],
    ['value' => 2],
    ['value' => 3],
    ['value' => 4],
    ['value' => 5],
    ['value' => 6],
    ['value' => 7],
    ['value' => 8],
    ['value' => 9],
    ['value' => 10],
    ['other' => 11],
];
$processedData2 = processData($data2);
print_r($processedData2);
```