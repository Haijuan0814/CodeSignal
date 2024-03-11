function solution(s) {
    var nums = s.split('');
    const frequencyMap = {};

    for (const num of nums) {
        frequencyMap[num] = (frequencyMap[num] || 0) + 1;
    }

    for (const num of nums) {
        if (frequencyMap[num] === 1) {
            return num;
        }
    }
    return '_'
}
