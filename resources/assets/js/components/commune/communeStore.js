const state = {
    communes: []
}

const mutations = {
    /*SET_COMMUNE (state, communeObj) {
        state.communes = communeObj
    },*/
    SET_COMMUNES_LIST (state, communeList) {
        state.communes = communeList
    },
    ADD_COMMUNE (state, communeObj) {
        state.communes.push(communeObj)
    }
}

const actions = {

    setCommuneList: ({commit}, communeList) => {
        return axios.get('/communes').then((response) => {
            if(response.status === 200) {
                commit('SET_COMMUNES_LIST', response.data)
                return response.data
            }
        })
    },
    addCommuneObject: ({commit}, communeObj) => {
        return axios.post('/commune', communeObj).then((response) => {
            console.log(response.data.data)
            commit('ADD_COMMUNE', response.data.data)
        })
    }
}

export default {
    state, mutations, actions
}