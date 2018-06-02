package com.teamb9.exception;

@SuppressWarnings("serial")
public class CustomBadRequestException extends SentienceImsException {

	private String code;

	public CustomBadRequestException() {
		super();
	}

	public CustomBadRequestException(String code) {
		super(code);
	}

	/**
	 * 
	 * @param msg
	 */
	public CustomBadRequestException(String code, String msg) {

		super(msg);
		this.code = code;
	}

	public String getCode() {
		return code;
	}

}
