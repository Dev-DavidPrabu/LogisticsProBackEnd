import { CFormSelect } from '@coreui/react'
import React, { useEffect, useState } from 'react'
import MaintenanceWorkorderService from 'src/Service/MaintenanceWorkorder/MaintenanceWorkorderService'

const MaintenanceWorkorderComponent = () => {

  const [loadDetails, setLoadDetails] = useState([])

  useEffect(() => {
    //fetch to get Work Order list form SAP
    // MaintenanceWorkorderService.getMaintenanceWorkorder.
    MaintenanceWorkorderService.getMaintenanceWorkorderService().then((res) => {

      // console.log(res.data);
      setLoadDetails(res.data)
    })
  }, [])

  return (
    <>

        <option value={''}>Select...</option>
        {loadDetails.map(({ EBELN }) => {
          return (
            <>
              <option key={EBELN} value={EBELN}>
                {EBELN}
              </option>
            </>
          )
        })}

    </>
  )
}

export default MaintenanceWorkorderComponent
