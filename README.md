# PHP Silent Failure on Missing Keys
This example demonstrates a common error in PHP data processing where missing keys in an input array are silently ignored. The function `processData` iterates through an array, expecting each element to contain a `'value'` key. If an element is missing this key, it is silently skipped instead of generating an error or warning. This can lead to unexpected behavior and data loss. The bug is illustrated by two examples. The first example works as expected, while the second example contains an array element missing the `'value'` key, resulting in a smaller-than-expected output.

## How to reproduce:
1. Save the code as `bug.php`
2. Run the script from the command line: `php bug.php`
3. Observe the output. The first print_r output shows the expected values, while the second print_r output omits the last array element as it does not contain a 'value' key.

## Solution: Handling missing keys
The solution shows how to handle the missing keys in a more robust manner, thus preventing unexpected behavior. 