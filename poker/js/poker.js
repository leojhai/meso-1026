var newPoker = (r) => {
    // 產生 img 的 jQuery 物件在變數 $img
    let $img = $('<img>').attr('src', './poker/back.png')
    $img.attr('data-poker', r)
    $img.attr('data-back', true)
    // 當img被按到的時候
    $img.on('click', (event) => {
        let $poker = $(event.target)

        // 判斷目前牌是蓋著還是翻開
        if ($poker.attr('data-back') == 'true') {
            // 目前牌是蓋著，要執行翻牌動作
            let r = $poker.attr('data-poker')
            r = Number(r)
            $poker.attr('src', './poker/pic' + (r + 1) + '.png')
            $poker.attr('data-back', false)
        } else {
            // 目前牌是打開的，要執行蓋牌的動作
            $poker.attr('src', './poker/back.png')
            $poker.attr('data-back', true)
        }
    })

    // 產生 div 的 jQuery 物件在變數 $div
    $div = $('<div>').addClass('col').addClass('poker')

    // 將 $img 插入到 $div 內
    $div.append($img)

    // 將 $div 插入到網頁 id=data 的html element 裡面
    $('#data').append($div)
}

$(() => {
    $('#main').on('click', () => {

        // 洗空桌面
        $('#data').empty();

        // 產生新撲克牌
        var poker = []
        for (let i = 0; i <12; i++) {
            poker.push(i)
        }

        // 洗牌
        for (let i = 0; i < 12; i++) {
            // 隨機抽第 r 張，和第一張交換
            let r = RandomInt(0, 12)
            let temp = poker[r]
            poker[r] = poker[0]
            poker[0] = temp
        }

        // 發牌
        for (let i = 0; i < 2; i++) {
            newPoker(poker[i])
        }
    })
})