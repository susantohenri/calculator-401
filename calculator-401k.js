const target = jQuery(`#calculator-401k`)

jQuery(document).ready(function () {
    target.calx({
        onAfterCalculate: () => {
            setTimeout(() => {
                const h5 = parseInt(jQuery(`[data-cell="H5"]`).html())
                const last_row = 33 + h5

                const last_balance = jQuery(`[data-cell="H${last_row}"]`).html().slice(0, -3)
                jQuery(`[data-cell="H8"]`).html(`$ ${last_balance}`)

                const last_salary = jQuery(`[data-cell="D${last_row}"]`).html()
                jQuery(`[data-cell="H9"]`).html(`$ ${last_salary}`)

                const last_my_contrib = jQuery(`[data-cell="J${last_row}"]`).html()
                jQuery(`[data-cell="H12"]`).html(`$ ${last_my_contrib}`)

                let empl_contrib = parseInt(jQuery(`[data-cell="H14"]`).html().replace(`$`, ``).replaceAll(`,`, ``))
                empl_contrib -= parseInt(jQuery(`[data-cell="H12"]`).html().replace(`$`, ``).replaceAll(`,`, ``))
                empl_contrib = empl_contrib.toLocaleString()
                jQuery(`[data-cell="H13"]`).html(`$ ${empl_contrib}`)

            }, 0)
        }
    })
})
