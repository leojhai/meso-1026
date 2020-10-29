 RandomInt = (start, end) => {
    // 計算放大的倍數
    let n = end - start + 1
    // 放大
    r = Math.random() * n
    // 無條件捨去
    r = Math.floor(r)
    // 位移到 start
    r = r + start
    return r
}