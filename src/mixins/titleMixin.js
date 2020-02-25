// Following @Taha_Shashtari 's guide on mixins to change the title tag

function getTitle (vm) {
    const { title } = vm.$options
    if (title) {
      return typeof title === 'function'
        ? title.call(vm) : title
    }
}
export default {
    created () {
        const title = getTitle(this)
        if (title) {
            document.title = title  + ' | Artpreneurship'
        }
    }
}