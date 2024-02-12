const target = jQuery(`#calculator-401k`)
let chart = null

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

                const chart_ctx = document.getElementById(`calculator-401k-chart`).getContext('2d')
                let absis = []
                let balance = []
                let my_contrib = []
                let total_contrib = []

                jQuery(`#calculator-401k-lower-left-table [data-cell^="B"]:visible`).each((index) => {
                    if (0 < index) {
                        absis.push(jQuery(`#calculator-401k-lower-left-table [data-cell^="B"]:visible`).eq(index).html())
                        balance.push(jQuery(`#calculator-401k-lower-left-table [data-cell^="H"]:visible`).eq(index).html().slice(0, -3).replaceAll(`,`, ``))
                        my_contrib.push(jQuery(`#calculator-401k-lower-right-table [data-cell^="J"]:visible`).eq(index).html().replaceAll(`,`, ``))
                        total_contrib.push(jQuery(`#calculator-401k-lower-right-table [data-cell^="K"]:visible`).eq(index).html().replaceAll(`,`, ``))
                    }
                })
                const chart_opt = {
                    type: `line`,
                    data: {
                        labels: absis,
                        datasets: [{
                            label: `Balance`,
                            data: balance,
                            backgroundColor: `blue`
                        }, {
                            label: `My Contribution`,
                            data: my_contrib,
                            backgroundColor: `red`
                        }, {
                            label: `Total Contribution`,
                            data: total_contrib,
                            backgroundColor: `orange`
                        }]
                    }
                }

                if (chart) chart.destroy()
                chart = new Chart(chart_ctx, chart_opt)

            }, 0)
        }
    })
})
