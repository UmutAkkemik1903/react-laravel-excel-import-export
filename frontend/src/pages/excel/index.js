import {Button, ButtonGroup, Table} from "react-bootstrap";
import {useEffect, useState} from "react";
import axios from "axios";
import baseUrl from "../url/baseUrl";
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
function Products(){
    const success = () => toast.success("İndirme başarılı");

    const [data,setData]=useState([]);
    const [excellExport,setExcellExport]=useState([]);
    const [resfresh,setRefresh]=useState(false)
    useEffect(()=>{
        axios.get(baseUrl+'product').then((res)=>{
			setData(res.data)
        }).catch(e => console.log(e))
    },[resfresh])

    const excelExport = () => {
        fetch(baseUrl+'export')
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'products.xlsx';
                document.body.appendChild(a);
                a.click();
                a.remove();
            });

    }

    return(
        <>
            <div className="button">
                <ButtonGroup aria-label="Basic example">
                    <Button onClick={excelExport} variant="secondary">Export</Button>
                    <Button type="file" variant="secondary">İmport</Button>
                </ButtonGroup>
            </div>
            <div>
                <Table responsive="sm"
                       dataS
                >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori ID</th>
                        <th>Grup Kodu</th>
                        <th>n Ürün Kodu</th>
                        <th>Mağaza Ürün Kodu</th>
                        <th>Mağaza Stok Kodu</th>
                        <th>Katalog ID</th>
                        <th>Barkod</th>
                        <th>Ürün Başlığı</th>
                        <th>Varyant özellik</th>
                        <th>Ürün Statüsü</th>
                        <th>Mağaza Notu</th>
                        <th>Hazırlık Süresi</th>
                        <th>Stok</th>
                        <th>Para Birimi</th>
                        <th>Piyasa Satış Fiyatı</th>
                        <th>Satış Fiyatı</th>
                        <th>Komisyon Oranı</th>
                        <th>Teslimat Şablonu İsmi</th>
                    </tr>
                    </thead>
                    <tbody>
                    {data.map((list)=>(
                        <tr>
                            <td>{list.id}</td>
                            <td>{list.category_id}</td>
                            <td>{list.group_code}</td>
                            <td>{list.products_code}</td>
                            <td>{list.shop_products_code}</td>
                            <td>{list.shop_stock_code}</td>
                            <td>{list.catalog_id}</td>
                            <td>{list.barkode}</td>
                            <td>{list.products_title}</td>
                            <td>{list.products_properties}</td>
                            <td>{list.products_status}</td>
                            <td>{list.shop_note}</td>
                            <td>{list.ready_timer}</td>
                            <td>{list.stock}</td>
                            <td>{list.money_type}</td>
                            <td>{list.market_selling_price}</td>
                            <td>{list.n_selling_price}</td>
                            <td>{list.commission}</td>
                            <td>{list.delivery_template_name}</td>
                        </tr>
                    ))}

                    </tbody>
                </Table>

            </div>
        </>
    )
}
export default Products;