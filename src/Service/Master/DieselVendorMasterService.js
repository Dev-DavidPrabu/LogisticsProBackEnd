//Created By Alwin
import AppConfig from 'src/AppConfig'
import api from '../Config'

const DIESEL_VENDOR_MASTER_BASE_URL = AppConfig.api.baseUrl + '/dieselvendor'

class DieselVendorMasterService {
  getDieselVendors() {
    return api.get(DIESEL_VENDOR_MASTER_BASE_URL)
  }

  createDieselVendors(value) {
    return api.post(DIESEL_VENDOR_MASTER_BASE_URL, value)
  }

  getDieselVendorsById(DieselVendorsId) {
    return api.get(DIESEL_VENDOR_MASTER_BASE_URL + '/' + DieselVendorsId)
  }

  updateDieselVendors(DieselVendorsId, DieselVendors) {
    return api.post(DIESEL_VENDOR_MASTER_BASE_URL + '/' + DieselVendorsId, DieselVendors)
  }

  deleteDieselVendors(DieselVendorsId) {
    return api.delete(DIESEL_VENDOR_MASTER_BASE_URL + '/' + DieselVendorsId)
  }
}

export default new DieselVendorMasterService()
