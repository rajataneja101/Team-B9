package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomSessionTimeOutException  extends SentienceImsException
{
	private String code;

	public CustomSessionTimeOutException() {
		super();
	}

	public CustomSessionTimeOutException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomSessionTimeOutException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}
}
